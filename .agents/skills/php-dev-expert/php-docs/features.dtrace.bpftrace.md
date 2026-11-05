# Usando bpftrace com Sondas Estáticas DTrace do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.dtrace.bpftrace.php

---

## Usando bpftrace com Sondas Estáticas DTrace do PHP

Em distribuições Linux com um kernel que suporta eBPF, o
utilitário bpftrace pode se conectar diretamente às sondas USDT DTrace do PHP,
sem precisar do SystemTap.

### Instalando o bpftrace

Instale o bpftrace usando o gerenciador de pacotes da distribuição. Por
exemplo, no Oracle Linux, RHEL ou Fedora:

```
# dnf install bpftrace
```

Ou, no Debian ou Ubuntu:

```
# apt install bpftrace
```

Os exemplos abaixo assumem que o binário PHP alvo está instalado em
/usr/bin/php.

As mesmas sondas USDT também são expostas por outras SAPIs construídas a partir da mesma árvore de fontes, então o
alvo da sonda pode ser, ao invés disso, o módulo do Apache
(libphp.so) ou o binário do FastCGI Process Manager
(php-fpm); substitua o caminho
apropriado ou conecte-se pelo PID com `-p` conforme necessário.

Certifique-se de que o binário alvo foi construído com o DTrace e que a variável de ambiente está configurado corretamente.
Veja [Configurando o PHP para Sondas Estáticas DTrace](features.dtrace.dtrace.md#features.dtrace.install) para detalhes.

As sondas estáticas do PHP podem ser listadas usando
**bpftrace**:

```
# bpftrace -l 'usdt:/usr/bin/php:php:*'
```

A saída é:

```
usdt:/usr/bin/php:php:compile__file__entry
usdt:/usr/bin/php:php:compile__file__return
usdt:/usr/bin/php:php:error
usdt:/usr/bin/php:php:exception__caught
usdt:/usr/bin/php:php:exception__thrown
usdt:/usr/bin/php:php:execute__entry
usdt:/usr/bin/php:php:execute__return
usdt:/usr/bin/php:php:function__entry
usdt:/usr/bin/php:php:function__return
usdt:/usr/bin/php:php:request__shutdown
usdt:/usr/bin/php:php:request__startup
```

**Exemplo #1 all\_probes.bt para instrumentação de todas as Sondas Estáticas do PHP com bpftrace**

```
#!/usr/bin/env bpftrace

usdt:/usr/bin/php:php:compile__file__entry
{
    printf("Probe compile__file__entry\n");
    printf("  compile_file %s\n", str(arg0));
    printf("  compile_file_translated %s\n", str(arg1));
}
usdt:/usr/bin/php:php:compile__file__return
{
    printf("Probe compile__file__return\n");
    printf("  compile_file %s\n", str(arg0));
    printf("  compile_file_translated %s\n", str(arg1));
}
usdt:/usr/bin/php:php:error
{
    printf("Probe error\n");
    printf("  errormsg %s\n", str(arg0));
    printf("  request_file %s\n", str(arg1));
    printf("  lineno %d\n", (int32)arg2);
}
usdt:/usr/bin/php:php:exception__caught
{
    printf("Probe exception__caught\n");
    printf("  classname %s\n", str(arg0));
}
usdt:/usr/bin/php:php:exception__thrown
{
    printf("Probe exception__thrown\n");
    printf("  classname %s\n", str(arg0));
}
usdt:/usr/bin/php:php:execute__entry
{
    printf("Probe execute__entry\n");
    printf("  request_file %s\n", str(arg0));
    printf("  lineno %d\n", (int32)arg1);
}
usdt:/usr/bin/php:php:execute__return
{
    printf("Probe execute__return\n");
    printf("  request_file %s\n", str(arg0));
    printf("  lineno %d\n", (int32)arg1);
}
usdt:/usr/bin/php:php:function__entry
{
    printf("Probe function__entry\n");
    printf("  function_name %s\n", str(arg0));
    printf("  request_file %s\n", str(arg1));
    printf("  lineno %d\n", (int32)arg2);
    printf("  classname %s\n", str(arg3));
    printf("  scope %s\n", str(arg4));
}
usdt:/usr/bin/php:php:function__return
{
    printf("Probe function__return\n");
    printf("  function_name %s\n", str(arg0));
    printf("  request_file %s\n", str(arg1));
    printf("  lineno %d\n", (int32)arg2);
    printf("  classname %s\n", str(arg3));
    printf("  scope %s\n", str(arg4));
}
usdt:/usr/bin/php:php:request__shutdown
{
    printf("Probe request__shutdown\n");
    printf("  file %s\n", str(arg0));
    printf("  request_uri %s\n", str(arg1));
    printf("  request_method %s\n", str(arg2));
}
usdt:/usr/bin/php:php:request__startup
{
    printf("Probe request__startup\n");
    printf("  file %s\n", str(arg0));
    printf("  request_uri %s\n", str(arg1));
    printf("  request_method %s\n", str(arg2));
}
```

O script acima irá instrumentar todos os pontos de sondas estáticas do núcleo do PHP
durante toda a duração de um script PHP em execução. O bpftrace requer
privilégios de root:

```
# USE_ZEND_DTRACE=1 bpftrace -c '/usr/bin/php test.php' all_probes.bt
```

Para instrumentar um processo PHP já em execução (por exemplo, um
worker do php-fpm ou um processo Apache carregando
libphp.so), conecte-se pelo PID:

```
# bpftrace -p $PID all_probes.bt
```

O caminho alvo `usdt:` no script deve corresponder ao binário do
processo em execução; ajuste `usdt:/usr/bin/php` para o
binário do php-fpm ou para libphp.so conforme apropriado.

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
