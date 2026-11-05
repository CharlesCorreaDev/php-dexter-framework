# Opções de linha de comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.commandline.options.php

---

## Opções de linha de comando

A lista de opções de linha de comando fornecidas pelo binário do PHP pode ser
requisitada a qualquer momento bastando executar o PHP com a opção **-h**:

```
Usage: php [options] [-f] <file> [--] [args...]
   php [options] -r <code> [--] [args...]
   php [options] [-B <begin_code>] -R <code> [-E <end_code>] [--] [args...]
   php [options] [-B <begin_code>] -F <file> [-E <end_code>] [--] [args...]
   php [options] -- [args...]
   php [options] -a

  -a               Run interactively
  -c <path>|<file> Look for php.ini file in this directory
  -n               No php.ini file will be used
  -d foo[=bar]     Define INI entry foo with value 'bar'
  -e               Generate extended information for debugger/profiler
  -f <file>        Parse and execute <file>.
  -h               This help
  -i               PHP information
  -l               Syntax check only (lint)
  -m               Show compiled in modules
  -r <code>        Run PHP <code> without using script tags <?..?>
  -B <begin_code>  Run PHP <begin_code> before processing input lines
  -R <code>        Run PHP <code> for every input line
  -F <file>        Parse and execute <file> for every input line
  -E <end_code>    Run PHP <end_code> after processing all input lines
  -H               Hide any passed arguments from external tools.
  -S <addr>:<port> Run with built-in web server.
  -t <docroot>     Specify document root <docroot> for built-in web server.
  -s               Output HTML syntax highlighted source.
  -v               Version number
  -w               Output source with stripped comments and whitespace.

  args...          Arguments passed to script. Use -- args when first argument
                   starts with - or script is read from stdin

  --ini            Show configuration file names

  --rf <name>      Show information about function <name>.
  --rc <name>      Show information about class <name>.
  --re <name>      Show information about extension <name>.
  --rz <name>      Show information about Zend extension <name>.
  --ri <name>      Show configuration for extension <name>.
```

**Opções de linha de comando**

| Opção | Opção Estendida | Descrição |
| --- | --- | --- |
| -a | --interactive | Executa o PHP interativamente. Para mais informações veja a seção [Shell interativo](features.commandline.interactive.md). |
| -b | --bindpath | Vincula o Path para o modo externo do servidor FASTCGI (apenas em CGI). |
| -C | --no-chdir | Não executa chdir para o diretório do script (apenas em CGI). |
| -q | --no-header | Modo silencioso. Suprime os cabeçalhos HTTP na saída (apenas em CGI). |
| -T | --timing | Calcula o tempo de execução do script repetidas count de vezes (apenas em CGI). |
| -c | --php-ini | Especifica um diretório para procurar pelo php.ini, ou um arquivo `INI` personalizado (que não precisa se chamar php.ini), exemplo:  ``` $ php -c /custom/directory/ my_script.php  $ php -c /custom/directory/custom-file.ini my_script.php ```  Se essa opção não for especificada, o php.ini será procurado no [local padrão](configuration.file.md). |
| -n | --no-php-ini | Ignore o php.ini completamente. |
| -d | --define | Define um valor personalizado para qualquer uma das diretivas de configuração permitidas em arquivos php.ini. A sintaxe é: ```  -d configuration_directive[=value] ```  **Exemplo #1 Exemplo de uso de `-d` para definir uma configuração INI**  ``` # Omitir o valor irá configurar a diretiva para "1" $ php -d max_execution_time         -r '$foo = ini_get("max_execution_time"); var_dump($foo);' string(1) "1"  # Passar um valor vazio irá configurar a detiva para "" php -d max_execution_time=         -r '$foo = ini_get("max_execution_time"); var_dump($foo);' string(0) ""  # A diretiva de configudação será configurada para tudo o que estiver depois do sinal de '=' $ php -d max_execution_time=20         -r '$foo = ini_get("max_execution_time"); var_dump($foo);' string(2) "20" $ php         -d max_execution_time=doesntmakesense         -r '$foo = ini_get("max_execution_time"); var_dump($foo);' string(15) "doesntmakesense" ``` |
| -e | --profile-info | Ativa o modo de informação estendido, para ser usado por um debugger/profiler. |
| -f | --file | Lê e executa o arquivo especificado. A opção **-f** é opcional e pode ser omitida - fornecer somente o nome do arquivo a ser executado é suficiente. |
| -h e -? | --help e --usage | Exibe uma lista de opções de linha de comando com a descrição do seu funcionamento. |
| -i | --info | Invoca [phpinfo()](function.phpinfo.md), e exibe o resultado. Caso o PHP não esteja executando corretamente, é aconselhável usar o comando **php -i** e verificar se alguma mensagem de erro é informada antes ou no lugar da tabela de informações. Esteja ciente de que ao usar o modo CGI a saída será em HTML e portanto bastante longa. |
| -l | --syntax-check | Verifica a sintaxe mas não executa o código PHP informado. A entrada padrão será processada se nenhum arquivo for especificado, caso contrário cada arquivo será verificado. Em caso de sucesso, o texto `No syntax errors detected in <filename>` é escrito na saída padrão. Em caso de falha, o texto `Errors parsing <filename>` é escrito na saída padrão junto com o erro do analisador interno. Se alguma falha for encontrada nos arquivos especificados (ou na entrada padrão), o código de retorno do shell será `-1`, caso contrário o código de retorno será `0`.  Esta opção encontrará erros fatais (como funções indefinidas) que requerem a execução do código.  **Nota**: Antes do PHP 8.3.0, só era possível especificar um nome de arquivo para ser verificado.  **Nota**: Essa opção não funciona em conjunto com a opção **-r**. |
| -m | --modules | **Exemplo #2 Retorna os módulos PHP e Zend integrados e carregados**  ``` $ php -m [PHP Modules] xml tokenizer standard session posix pcre overload mysql mbstring ctype  [Zend Modules] ``` |
| -r | --run | Habilita a execução do código PHP incluído diretamente na linha de comando. As tags de abertura e fechamento do PHP (`<?php` e `?>`) **não são necessárias** e irão causar um erro de leitura caso sejam incluídas.  **Nota**: Deve-se ter cuidado ao usar esta forma do PHP para não colidir com a substituição de variáveis de linha de comando realizadas pelo shell.  **Exemplo #3 Obtendo um erro de sintaxe ao usar aspas duplas**  ``` $ php -r "$foo = get_defined_constants();" PHP Parse error:  syntax error, unexpected '=' in Command line code on line 1  Parse error: syntax error, unexpected '=' in Command line code on line 1 ```  O problema aqui é que o sh/bash realiza substituições de variáveis mesmo usando aspas duplas `"`. já que a variável $foo provavelmente não está definida, ela será avaliada como nada, o que faz com que o código passado ao PHP para execução na verdade seja lido como:  ``` $ php -r " = get_defined_constants();" ```  A maneira correta é usar aspas simples `'`. Variáveis em strings de aspas simples não são substituídas pelo sh/bash.  **Exemplo #4 Usando aspas simples para evitar a substituição de variáveis do shell**  ``` $ php -r '$foo = get_defined_constants(); var_dump($foo);' array(370) {   ["E_ERROR"]=>   int(1)   ["E_WARNING"]=>   int(2)   ["E_PARSE"]=>   int(4)   ["E_NOTICE"]=>   int(8)   ["E_CORE_ERROR"]=>   [...] ```  Se estiver usando um ambiente de linha de comando que não seja sh/bash, outros problemas podem ser encontrados - caso necessário, um relato de problema pode ser aberto em [» https://github.com/php/php-src/issues](https://github.com/php/php-src/issues). Ainda assim é muito fácil encontrar problemas ao tentar usar variáveis (do shell ou do PHP) em código de linha de comando, ou usando barra invertida para escapar, por isso tenha muito cuidado quando fizer isso. Você foi avisado!  **Nota**: **-r** está disponível no CLI SAPI, mas não no SAPI *CGI*.  **Nota**: Essa opção é normalmente utilizada com código muito básico, portanto algumas diretivas de configuração (como [auto\_prepend\_file](ini.core.md#ini.auto-prepend-file) e [auto\_append\_file](ini.core.md#ini.auto-append-file)) são ignoradas nesse modo. |
| -B | --process-begin | Código PHP a ser executado antes de processar a entrada padrão. |
| -R | --process-code | Código PHP a ser executado para cada linha de entrada.  Existem duas variáveis especiais disponíveis nesse modo: $argn e $argi. $argn conterá a linha que o PHP estiver processando no momento, enquanto $argi irá conter o número da linha. |
| -F | --process-file | Arquivo PHP a ser executado para cada linha de entrada. |
| -E | --process-end | Código PHP a ser executado após processar a entrada.  **Exemplo #5 Usando as opções **-B**, **-R** e **-E** para contar o número de linhas de um projeto.**  ``` $ find my_proj | php -B '$l=0;' -R '$l += count(@file($argn));' -E 'echo "Total Lines: $l\n";' Total Lines: 37328 ``` |
| -S | --server | Inicia o [servidor interno do PHP](features.commandline.webserver.md). |
| -t | --docroot | Específica a raiz do documento para o [servidor interno do PHP](features.commandline.webserver.md). |
| -s | --syntax-highlight e --syntax-highlighting | Exibe o código com destaque de sintaxe em cores.  Essa opção usa os mecanismos internos para interpretar os arquivos e escrever uma versão HTML colorida do código para a saída padrão. Repare que tudo que ele faz é gerar um bloco de tags HTML `<code> [...] </code>`, sem os cabeçalhos HTML.  **Nota**: Essa opção não funciona em conjunto com a opção **-r**. |
| -v | --version | **Exemplo #6 Usando **-v** para obter o nome do SAPI e a versão do PHP e do Zend**  ``` $ php -v PHP 5.3.1 (cli) (built: Dec 11 2009 19:55:07) Copyright (c) 1997-2009 The PHP Group Zend Engine v2.3.0, Copyright (c) 1998-2009 Zend Technologies ``` |
| -w | --strip | Exibe o código com remoção de comentários e de espaços em branco.  **Nota**: Essa opção não funciona em conjunto com a opção **-r**. |
|  | --ini | Exibir nomes de arquivos de configuração e diretórios verificados. Opcionalmente, passe `--ini=diff` para mostrar as diferenças entre os arquivos de configuração carregados e a configuração padrão. **Exemplo #7 Exemplo de `--ini`**  ``` $ php --ini Configuration File (php.ini) Path: /usr/dev/php/5.2/lib Loaded Configuration File:         /usr/dev/php/5.2/lib/php.ini Scan for additional .ini files in: (none) Additional .ini files parsed:      (none) ```  **Nota**: A opção `--ini=diff` não está disponivel em versões anteriores ao PHP 8.5.0. |
| --rf | --rfunction | Exibe informações sobre a função ou método de objeto informado (como por exemplo o número e nome dos parâmetros).  Essa opção só está disponível se o PHP for compilado com suporte a [Reflexão](book.reflection.md).  **Exemplo #8 uso básico da opção `--rf`**  ``` $ php --rf var_dump Function [ <internal> public function var_dump ] {    - Parameters [2] {     Parameter #0 [ <required> $var ]     Parameter #1 [ <optional> $... ]   } } ``` |
| --rc | --rclass | Exibe informações sobre uma determinada classe (lista de constantes, propriedades e métodos).  Essa opção só está disponível se o PHP for compilado com suporte a [Reflexão](book.reflection.md).  **Exemplo #9 exemplo de `--rc`**  ``` $ php --rc Directory Class [ <internal:standard> class Directory ] {    - Constants [0] {   }    - Static properties [0] {   }    - Static methods [0] {   }    - Properties [0] {   }    - Methods [3] {     Method [ <internal> public method close ] {     }      Method [ <internal> public method rewind ] {     }      Method [ <internal> public method read ] {     }   } } ``` |
| --re | --rextension | Exibe informações sobre uma determinada extensão (lista de opções do php.ini, funções definidas, constantes e classes).  Essa opção só está disponível se o PHP for compilado com suporte a [Reflexão](book.reflection.md).  **Exemplo #10 Exemplo de `--re`**  ``` $ php --re json Extension [ <persistent> extension #19 json version 1.2.1 ] {    - Functions {     Function [ <internal> function json_encode ] {     }     Function [ <internal> function json_decode ] {     }   } } ``` |
| --rz | --rzendextension | Exibe as informações de configuração de uma determinada extensão Zend (a mesma informação retornada pela [phpinfo()](function.phpinfo.md)). |
| --ri | --rextinfo | Exibe as informações de configuração de uma determinada extensão (as mesmas informações retornadas pela [phpinfo()](function.phpinfo.md)). As informações de configurações do núcleo da linguagem estão disponíveis usando "main" como nome da extensão.  **Exemplo #11 exemplo de `--ri`**  ``` $ php --ri date  date  date/time support => enabled "Olson" Timezone Database Version => 2009.20 Timezone Database => internal Default timezone => Europe/Oslo  Directive => Local Value => Master Value date.timezone => Europe/Oslo => Europe/Oslo date.default_latitude => 59.930972 => 59.930972 date.default_longitude => 10.776699 => 10.776699 date.sunset_zenith => 90.583333 => 90.583333 date.sunrise_zenith => 90.583333 => 90.583333 ``` |

> **Nota**:
>
> As opções `-rBRFEH`, `--ini` e
> `--r[fcezi]` estão disponíveis somente no CLI.

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
