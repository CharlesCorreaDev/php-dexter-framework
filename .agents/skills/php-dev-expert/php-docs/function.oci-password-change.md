# Altera a senha do usuário do Oracle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-password-change.php

---

# oci\_password\_change

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_password\_change — Altera a senha do usuário do Oracle

### Descrição

function **oci\_password\_change**(  
    [resource](language.types.resource.md) `$connection`,  
    [string](language.types.string.md) `$username`,  
    [string](language.types.string.md) `$old_password`,  
    [string](language.types.string.md) `$new_password`  
): [bool](language.types.boolean.md)

function **oci\_password\_change**(  
    [string](language.types.string.md) `$database_name`,  
    [string](language.types.string.md) `$username`,  
    [string](language.types.string.md) `$old_password`,  
    [string](language.types.string.md) `$new_password`  
): [resource](language.types.resource.md)

Altera a senha do usuário `username`.

A função **oci\_password\_change()** é mais útil para scripts de linha de comando PHP,
ou quando conexões não persistentes são usadas em toda a aplicação PHP.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle, retornado por
    [oci\_connect()](function.oci-connect.md) ou [oci\_pconnect()](function.oci-pconnect.md).

`username`
:   O nome de usuário do Oracle.

`old_password`
:   A senha antiga.

`new_password`
:   A nova senha a ser definida.

`database_name`
:   O nome do banco de dados.

### Valor Retornado

Quando `database_name` é fornecido, **oci\_password\_change()** retorna **`true`** em caso de sucesso,
ou **`false`** em caso de falha. Quando `connection` é fornecido, **oci\_password\_change()** retorna
o recurso de conexão em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **oci\_password\_change()** alterando a senha de um usuário já conectado**

```
<?php

$dbase      = 'localhost/orcl';
$user       = 'cj';
$current_pw = 'welcome';
$new_pw     = 'geelong';

$c = oci_pconnect($user, $current_pw, $dbase);
oci_password_change($c, $user, $current_pw, $new_pw);
echo "A nova senha é : " . $new_pw . "\n";

?>
```

**Exemplo #2 Exemplo de **oci\_password\_change()** conectando e alterando a senha em uma só etapa**

```
<?php

$dbase      = 'localhost/orcl';
$user       = 'cj';
$current_pw = 'welcome';
$new_pw     = 'geelong';

$c = oci_pconnect($user, $current_pw, $dbase);
if (!$c) {
    $m = oci_error();
    if ($m['code'] == 28001) { // "ORA-28001: the password has expired"
        // Faz login e redefine a senha ao mesmo tempo
        $c = oci_password_change($dbase, $user, $current_pw, $new_pw);
        if ($c) {
            echo "A nova senha é : " . $new_pw . "\n";
        }
    }
}

if (!$c) {  // O erro original não era 28001, ou a alteração de senha falhou
    $m = oci_error();
    trigger_error('Não foi possível conectar ao banco de dados: '. $m['message'], E_USER_ERROR);
}

// Usando a conexão $c
// ...

?>
```

### Notas

> **Nota**:
>
> A alteração da senha com esta função ou diretamente no
> Oracle deve ser feita com cuidado. Isso porque as aplicações PHP
> podem continuar a reutilizar conexões persistentes com sucesso
> autenticando-se com a senha antiga. A prática recomendada é
> reiniciar todos os servidores web sempre que a senha do usuário for alterada.

> **Nota**:
>
> Ao atualizar as bibliotecas do cliente Oracle ou o banco de dados de uma versão anterior à 11.2.0.3
> para a versão 11.2.0.3 ou superior, **oci\_password\_change()** pode gerar o
> erro "ORA-1017: invalid username/password", a menos que as versões do cliente e do servidor sejam atualizadas
> ao mesmo tempo.

> **Nota**:
>
> A segunda sintaxe **oci\_password\_change()** está disponível
> desde a versão 1.1 do OCI8.

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
