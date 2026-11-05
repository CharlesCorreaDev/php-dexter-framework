# Começando a construir um plugin mysqlnd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.plugin.developing.php

---

## Começando a construir um plugin mysqlnd

É importante lembrar que um plugin `mysqlnd`
é em si uma extensão PHP.

O código a seguir mostra a estrutura básica da função MINIT
que será usada no plugin `mysqlnd` típico:

```
/* my_php_mysqlnd_plugin.c */

 static PHP_MINIT_FUNCTION(mysqlnd_plugin) {
  /* globais, entradas ini, recursos, classes */

  /* registra o plugin mysqlnd */
  mysqlnd_plugin_id = mysqlnd_plugin_register();

  conn_m = mysqlnd_get_conn_methods();
  memcpy(org_conn_m, conn_m,
    sizeof(struct st_mysqlnd_conn_methods));

  conn_m->query = MYSQLND_METHOD(mysqlnd_plugin_conn, query);
  conn_m->connect = MYSQLND_METHOD(mysqlnd_plugin_conn, connect);
 }
```

```
/* my_mysqlnd_plugin.c */

 enum_func_status MYSQLND_METHOD(mysqlnd_plugin_conn, query)(/* ... */) {
  /* ... */
 }
 enum_func_status MYSQLND_METHOD(mysqlnd_plugin_conn, connect)(/* ... */) {
  /* ... */
 }
```

**Análise de tarefa: do C ao espaço do usuário**

```
class proxy extends mysqlnd_plugin_connection {
  public function connect($host, ...) { .. }
}
mysqlnd_plugin_set_conn_proxy(new proxy());
```

Processo:

1. PHP: usuário registra chamada do plugin
2. PHP: usuário chama qualquer API PHP MySQL para se conectar ao MySQL
3. C: ext/\*mysql\* chama o método de mysqlnd
4. C: mysqlnd chega em ext/mysqlnd\_plugin
5. C: ext/mysqlnd\_plugin
   1. Chama a função de retorno no espaço de usuário
   2. Ou o método original de `mysqlnd`, se a função de retorno
      no espaço de usuário não estiver definida

Deve-se fazer o seguinte:

1. Escrever uma classe "mysqlnd\_plugin\_connection" em C
2. Aceitar e registrar um objeto proxy através de
   "mysqlnd\_plugin\_set\_conn\_proxy()"
3. Chamar métodos proxy do espaço do usuário a partir do C (otimização -
   zend\_interfaces.h)

Os métodos de objeto do espaço do usuário podem ser chamados usando
`call_user_function()` ou pode-se operar em um nível
mais próximo do Motor Zend e usar
`zend_call_method()`.

**Otimização: chamando métrodos a partir do C usando zend\_call\_method**

O trecho de código a seguir mostra o protótipo da
função `zend_call_method`, obtido de
zend\_interfaces.h.

```
 ZEND_API zval* zend_call_method(
  zval **object_pp, zend_class_entry *obj_ce,
  zend_function **fn_proxy, char *function_name,
  int function_name_len, zval **retval_ptr_ptr,
  int param_count, zval* arg1, zval* arg2 TSRMLS_DC
);
```

A API Zend suporta apenas dois argumentos. Pode ser necessário mais, por exemplo:

```
 enum_func_status (*func_mysqlnd_conn__connect)(
  MYSQLND *conn, const char *host,
  const char * user, const char * passwd,
  unsigned int passwd_len, const char * db,
  unsigned int db_len, unsigned int port,
  const char * socket, unsigned int mysql_flags TSRMLS_DC
);
```

Para contornar esse problema é necessário fazer uma cópia de
`zend_call_method()` e adicionar um recurso para
parâmetros adicionais. Pode-se fazer isso criando um conjunto de
macros `MY_ZEND_CALL_METHOD_WRAPPER`.

**Chamando o espaço de usuário do PHP**

Este trecho de código mostra o método otimizado para chamar uma função
de espaço do usuário a partir do C:

```
/* my_mysqlnd_plugin.c */

MYSQLND_METHOD(my_conn_class,connect)(
  MYSQLND *conn, const char *host /* ... */ TSRMLS_DC) {
  enum_func_status ret = FAIL;
  zval * global_user_conn_proxy = fetch_userspace_proxy();
  if (global_user_conn_proxy) {
    /* chama o proxy de espaço de usuário */
    ret = MY_ZEND_CALL_METHOD_WRAPPER(global_user_conn_proxy, host, /*...*/);
  } else {
    /* ou o método mysqlnd original = não faz nada, é transparente */
    ret = org_methods.connect(conn, host, user, passwd,
          passwd_len, db, db_len, port,
          socket, mysql_flags TSRMLS_CC);
  }
  return ret;
}
```

**Chamando o espaço de usuário: argumentos simples**

```
/* my_mysqlnd_plugin.c */

 MYSQLND_METHOD(my_conn_class,connect)(
  /* ... */, const char *host, /* ...*/) {
  /* ... */
  if (global_user_conn_proxy) {
    /* ... */
    zval* zv_host;
    MAKE_STD_ZVAL(zv_host);
    ZVAL_STRING(zv_host, host, 1);
    MY_ZEND_CALL_METHOD_WRAPPER(global_user_conn_proxy, zv_retval, zv_host /*, ...*/);
    zval_ptr_dtor(&zv_host);
    /* ... */
  }
  /* ... */
}
```

**Chamando o espaço de usuário: estruturas como argumentos**

```
/* my_mysqlnd_plugin.c */

MYSQLND_METHOD(my_conn_class, connect)(
  MYSQLND *conn, /* ...*/) {
  /* ... */
  if (global_user_conn_proxy) {
    /* ... */
    zval* zv_conn;
    ZEND_REGISTER_RESOURCE(zv_conn, (void *)conn, le_mysqlnd_plugin_conn);
    MY_ZEND_CALL_METHOD_WRAPPER(global_user_conn_proxy, zv_retval, zv_conn, zv_host /*, ...*/);
    zval_ptr_dtor(&zv_conn);
    /* ... */
  }
  /* ... */
}
```

O primeiro argumento de muitos métodos `mysqlnd` é um "objeto"
C. Por exemplo, o primeiro argumento do método connect() é
um ponteiro para `MYSQLND`. A estrutura MYSQLND
representa um objeto de conexão `mysqlnd`.

O ponteiro do objeto de conexão `mysqlnd` pode ser
comparado a um identificador de arquivo de E/S padrão. Como um arquivo de E/S padrão,
um objeto de conexão `mysqlnd` deve ser vinculado
ao espaço do usuário usando o tipo de variável de recurso PHP.

**Do C para o espaço de usuário e vice-versa**

```
 class proxy extends mysqlnd_plugin_connection {
  public function connect($conn, $host, ...) {
    /* "pre" gancho */
    printf("Conectando-se ao servidor = '%s'\n", $host);
    debug_print_backtrace();
    return parent::connect($conn);
  }

  public function query($conn, $query) {
    /* "pós" gancho */
    $ret = parent::query($conn, $query);
    printf("Consulta = '%s'\n", $query);
    return $ret;
  }
}
mysqlnd_plugin_set_conn_proxy(new proxy());
```

Os usuários de PHP devem ser capazes de chamar a implementação pai de um
método substituído.

Como resultado de se criar sub-classes, é possível refinar apenas métodos
selecionados e pode-se optar por ter ganchos "pré" ou "pós".

**Classe integrada: mysqlnd\_plugin\_connection::connect()**

```
/*  my_mysqlnd_plugin_classes.c */

 PHP_METHOD("mysqlnd_plugin_connection", connect) {
  /* ... simplificada! ... */
  zval* mysqlnd_rsrc;
  MYSQLND* conn;
  char* host; int host_len;
  if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "rs",
    &mysqlnd_rsrc, &host, &host_len) == FAILURE) {
    RETURN_NULL();
  }
  ZEND_FETCH_RESOURCE(conn, MYSQLND* conn, &mysqlnd_rsrc, -1,
    "Mysqlnd Connection", le_mysqlnd_plugin_conn);
  if (PASS == org_methods.connect(conn, host, /* simplificado! */ TSRMLS_CC))
    RETVAL_TRUE;
  else
    RETVAL_FALSE;
}
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
