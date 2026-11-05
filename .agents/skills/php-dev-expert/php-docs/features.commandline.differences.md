# Diferenças em relação a outros SAPIs

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.commandline.differences.php

---

## Diferenças em relação a outros SAPIs

Diferenças notáveis do CLI SAPI em comparação com outros
SAPIs:

- Diferente do CGI SAPI, nenhum cabeçalho
  é enviado para a saída.

  Embora o CGI SAPI forneça uma maneira de
  suprimir os cabeçalhos HTTP, não existe nenhuma forma equivalente de habilitá-los
  no CLI SAPI.

  CLI é inicializado no modo silencioso por padrão, embora as chaves **-q**
  e **--no-header** são mantidas por compatibilidade para que seja possível
  usar scripts CGI antigos.

  Ele não altera o diretório atual para aquele no qual o script está sendo executado
  (As opções **-C** e **--no-chdir** são mantidas por
  compatibilidade)

  Mensagens de erro em texto plano (sem formatação HTML).
- Existem certas diretivas do php.ini que são sobrescritas pelas do
  CLI SAPI porque elas não fazem sentido em um ambiente de linha de comando:

  **Diretivas do php.ini sobrescritas**

  | Diretiva | Valor padrão do CLI SAPI | Comentário |
  | --- | --- | --- |
  | [html\_errors](errorfunc.configuration.md#ini.html-errors) | **`false`** | Tem como padrão **`false`**, já que pode ser bem difícil ler mensagens de erro na linha de comando quando elas estão misturadas com tags HTML não interpretadas. |
  | [implicit\_flush](outcontrol.configuration.md#ini.implicit-flush) | **`true`** | Em um ambiente de linha de comando, é geralmente desejado para a saída, como a partir de [print](function.print.md), [echo](function.echo.md) e similares, que elas sejam exibidas imediatamente, e não mantidas em um buffer. Apesar disso, ainda é possível usar [output buffering](ref.outcontrol.md) para atrasar ou manipular a saída padrão. |
  | [max\_execution\_time](info.configuration.md#ini.max-execution-time) | 0 (unlimited) | O PHP em um ambiente de linha de comando tende a ser usado com um número de propostas muito mais diversas do que para aplicações web típicas, e como essas formas podem ter muito mais longevidade, o tempo máximo de execução é definido como sem limite. |
  | [register\_argc\_argv](ini.core.md#ini.register-argc-argv) | **`true`** | Definir isso como **`true`** significa que o script executado a partir do CLI SAPI sempre terá acesso ao *argc* (número de argumentos passados para a aplicação) e *argv* (array contendo os valores dos argumentos).  As variáveis [$argc](reserved.variables.argc.md) e [$argv](reserved.variables.argv.md) do PHP são automaticamente definidas com seus valores apropriados quando usando o CLI SAPI. Esses valores podem também ser encontrados no array [$\_SERVER](reserved.variables.server.md), por exemplo: [$\_SERVER['argv']](reserved.variables.server.md).  **Aviso** A presença de [$argv](reserved.variables.argv.md) ou [$\_SERVER['argv']](reserved.variables.server.md) não é uma indicação confiável de que um script está sendo executado da linha de comando porque elas podem ser definidas em outros contextos quando [register\_argc\_argv](ini.core.md#ini.register-argc-argv) está habilitada. O valor retornado por [php\_sapi\_name()](function.php-sapi-name.md) é o que deve ser verificado. ``` <?php  if (php_sapi_name() === 'cli') {     echo "Este script está sendo executado da linha de comando!\n"; } ```  **Aviso** Este recurso foi *DESCONTINUADO* a partir do PHP 8.5.0. O uso deste recurso é fortemente desencorajado. |
  | [output\_buffering](outcontrol.configuration.md#ini.output-buffering) | **`false`** | Apesar do valor no php.ini ser explicitamente definido como **`false`**, as funções de [Output buffering](book.outcontrol.md) estão disponíveis. |
  | [max\_input\_time](info.configuration.md#ini.max-input-time) | **`false`** | O PHP CLI não suporta GET, POST ou upload de arquivos. |

  > **Nota**:
  >
  > Essas diretivas não podem ser inicializadas com outro valor no arquivo
  > de configuração php.ini ou um valor personalizado (caso seja especificado). Essa
  > limitação ocorre pois os valores são aplicados depois que todos os arquivos
  > de configuração foram lidos. Entretanto, seus valores podem ser alterados
  > em tempo de execução (porém isso não se aplica a todos eles como
  > [register\_argc\_argv](ini.core.md#ini.register-argc-argv)).

  > **Nota**:
  >
  > É recomendado definir
  > [ignore\_user\_abort](misc.configuration.md#ini.ignore-user-abort) para
  > aplicações de linha de comando. Veja [ignore\_user\_abort()](function.ignore-user-abort.md)
  > para mais informações.
- Para facilitar o trabalho em ambientes de linha de comando, um número de constantes
  é definido para [fluxos de E/S](features.commandline.io-streams.md).
- O CLI SAPI **não** altera o diretório de trabalho
  para o diretório de onde o arquivo é executado.

  **Exemplo #1
  Exemplo demonstrando a diferença entre CGI e
  SAPI:**

  ```
  <?php
  // Um script de teste simples chamado test.php
  echo getcwd(), "\n";
  ?>
  ```

  Quando é utilizada a versão CGI a saída é:

  ```
  $ pwd
  /tmp

  $ php -q another_directory/test.php
  /tmp/another_directory
  ```

  Isso demonstra claramente que o PHP altera o diretório de trabalho para o diretório onde o
  arquivo é executado.

  Usando o CLI SAPI temos:

  ```
  $ pwd
  /tmp

  $ php -f another_directory/test.php
  /tmp
  ```

  Isso permite grande flexibilidade no desenvolvimento de ferramentas de linha de comando em PHP.

  > **Nota**:
  >
  > O CGI SAPI suporta esse comportamento do
  > CLI SAPI através da opção **-C** utilizada quando executado a partir
  > da linha de comando.

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
