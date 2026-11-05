# Usando SystemTap com Sondas Estáticas DTrace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.dtrace.systemtap.php

---

## Usando SystemTap com Sondas Estáticas DTrace

Em algumas distribuições Linux, o utilitário SystemTap de instrumentação pode ser
usado para instrumentar sondas estáticas do PHP. Isso está disponível no
PHP 5.4.20 e PHP 5.5.

### Instalando PHP com SystemTap

Instale o pacote de desenvolvimento do SystemTap, SDT:

```
# yum install systemtap-sdt-devel
```

Instale o PHP com as sondas DTrace habilitadas:

```
# ./configure --enable-dtrace ...
# make
```

### Listando as Sondas Estáticas com SystemTap

As sondas estáticas em PHP podem ser listados usando stap:

```
# stap -l 'process.provider("php").mark("*")' -c 'sapi/cli/php -i'
```

A saída será:

```
process("sapi/cli/php").provider("php").mark("compile__file__entry")
process("sapi/cli/php").provider("php").mark("compile__file__return")
process("sapi/cli/php").provider("php").mark("error")
process("sapi/cli/php").provider("php").mark("exception__caught")
process("sapi/cli/php").provider("php").mark("exception__thrown")
process("sapi/cli/php").provider("php").mark("execute__entry")
process("sapi/cli/php").provider("php").mark("execute__return")
process("sapi/cli/php").provider("php").mark("function__entry")
process("sapi/cli/php").provider("php").mark("function__return")
process("sapi/cli/php").provider("php").mark("request__shutdown")
process("sapi/cli/php").provider("php").mark("request__startup")
```

### Exemplo de SystemTap com PHP

**Exemplo #1 all\_probes.stp para instrumentação de todos as Sondas Estáticas do PHP com SystemTap**

```
probe process("sapi/cli/php").provider("php").mark("compile__file__entry") {
    printf("Probe compile__file__entry\n");
    printf("  compile_file %s\n", user_string($arg1));
    printf("  compile_file_translated %s\n", user_string($arg2));
}
probe process("sapi/cli/php").provider("php").mark("compile__file__return") {
    printf("Probe compile__file__return\n");
    printf("  compile_file %s\n", user_string($arg1));
    printf("  compile_file_translated %s\n", user_string($arg2));
}
probe process("sapi/cli/php").provider("php").mark("error") {
    printf("Probe error\n");
    printf("  errormsg %s\n", user_string($arg1));
    printf("  request_file %s\n", user_string($arg2));
    printf("  lineno %d\n", $arg3);
}
probe process("sapi/cli/php").provider("php").mark("exception__caught") {
    printf("Probe exception__caught\n");
    printf("  classname %s\n", user_string($arg1));
}
probe process("sapi/cli/php").provider("php").mark("exception__thrown") {
    printf("Probe exception__thrown\n");
    printf("  classname %s\n", user_string($arg1));
}
probe process("sapi/cli/php").provider("php").mark("execute__entry") {
    printf("Probe execute__entry\n");
    printf("  request_file %s\n", user_string($arg1));
    printf("  lineno %d\n", $arg2);
}
probe process("sapi/cli/php").provider("php").mark("execute__return") {
    printf("Probe execute__return\n");
    printf("  request_file %s\n", user_string($arg1));
    printf("  lineno %d\n", $arg2);
}
probe process("sapi/cli/php").provider("php").mark("function__entry") {
    printf("Probe function__entry\n");
    printf("  function_name %s\n", user_string($arg1));
    printf("  request_file %s\n", user_string($arg2));
    printf("  lineno %d\n", $arg3);
    printf("  classname %s\n", user_string($arg4));
    printf("  scope %s\n", user_string($arg5));
}
probe process("sapi/cli/php").provider("php").mark("function__return") {
    printf("Probe function__return: %s\n", user_string($arg1));
    printf(" function_name %s\n", user_string($arg1));
    printf("  request_file %s\n", user_string($arg2));
    printf("  lineno %d\n", $arg3);
    printf("  classname %s\n", user_string($arg4));
    printf("  scope %s\n", user_string($arg5));
}
probe process("sapi/cli/php").provider("php").mark("request__shutdown") {
    printf("Probe request__shutdown\n");
    printf("  file %s\n", user_string($arg1));
    printf("  request_uri %s\n", user_string($arg2));
    printf("  request_method %s\n", user_string($arg3));
}
probe process("sapi/cli/php").provider("php").mark("request__startup") {
    printf("Probe request__startup\n");
    printf("  file %s\n", user_string($arg1));
    printf("  request_uri %s\n", user_string($arg2));
    printf("  request_method %s\n", user_string($arg3));
}
```

O script acima irá instrumentar todos os pontos de sondas estáticas do núcleo do PHP
durante toda a duração de um script PHP em execução:

```
# stap -c 'sapi/cli/php test.php' all_probes.stp
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
