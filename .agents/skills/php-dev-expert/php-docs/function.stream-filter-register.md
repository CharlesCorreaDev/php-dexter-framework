# Registra um filtro de fluxo definido pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-filter-register.php

---

# stream\_filter\_register

(PHP 5, PHP 7, PHP 8)

stream\_filter\_register — Registra um filtro de fluxo definido pelo usuário

### Descrição

function **stream\_filter\_register**([string](language.types.string.md) `$filter_name`, [string](language.types.string.md) `$class`): [bool](language.types.boolean.md)

**stream\_filter\_register()** permite implementar
filtro de usuário em qualquer fluxo registrado usado com todas as outras
funções de sistemas de arquivos (como [fopen()](function.fopen.md),
[fread()](function.fread.md) etc.).

### Parâmetros

`filter_name`
:   O nome do filtro a ser registrado.

`class`
:   Para implementar um filtro, deve-se definir uma classe como uma extensão de
    [php\_user\_filter](class.php-user-filter.md) com um número de funções
    membro. Na execução de operações de leitura/escrita no fluxo
    ao qual o filtro estiver anexado, o PHP passará os dados através do
    filtro (e quaisquer outros filtros anexados ao fluxo) para que os
    dados possam ser modificados como desejado. Deve-se implementar os métodos
    exatamente como descrito em [php\_user\_filter](class.php-user-filter.md) - caso
    contrário, pode-se chegar a comportamentos não definidos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**stream\_filter\_register()** irá retornar **`false`** se o
nome do filtro em `filter_name` já estiver definido.

### Examples

**Exemplo #1 Filtro para converter para maiúsculas os caracteres no fluxo foo-bar.txt**

O exemplo abaixo implementa um filtro chamado `maiusculas`
no fluxo foo-bar.txt que irá converter para maiúsculas
todos caracteres de letras lidos ou escritos no fluxo.

```
<?php

/* Define a classe de filtro */
class filtro_maiusculas extends php_user_filter {
  function filter($entrada, $saida, &$consumido, $fechando)
  {
    while ($bucket = stream_bucket_make_writeable($entrada)) {
      $bucket->data = strtoupper($bucket->data);
      $consumido += $bucket->datalen;
      stream_bucket_append($saida, $bucket);
    }
    return PSFS_PASS_ON;
  }
}

/* Registra o filtro no PHP */
stream_filter_register("maiusculas", "filtro_maiusculas")
    or die("Falha ao registrar o filtro");

$fp = fopen("foo-bar.txt", "w");

/* Anexa o filtro registrado ao fluxo que acabou de ser aberto */
stream_filter_append($fp, "maiusculas");

fwrite($fp, "Linha1\n");
fwrite($fp, "Palavra - 2\n");
fwrite($fp, "Facil Como 123\n");

fclose($fp);

/* Lê de volta o conteúdo
 */
readfile("foo-bar.txt");

?>
```

O exemplo acima produzirá:

```
LINHA1
PALAVRA - 2
FACIL COMO 123
```

**Exemplo #2 Registrando uma classe de filtro genérica para combinar com múltiplos nomes de filtro.**

```
<?php

/* Define a classe de filtro */
class filtro_string extends php_user_filter {
  var $modo;

  function filter($entrada, $saida, &$consumido, $fechando)
  {
    while ($bucket = stream_bucket_make_writeable($entrada)) {
      if ($this->modo == 1) {
        $bucket->data = strtoupper($bucket->data);
      } elseif ($this->modo == 0) {
        $bucket->data = strtolower($bucket->data);
      }

      $consumido += $bucket->datalen;
      stream_bucket_append($saida, $bucket);
    }
    return PSFS_PASS_ON;
  }

  function onCreate()
  {
    if ($this->filtername == 'str.maiuscula') {
      $this->modo = 1;
    } elseif ($this->filtername == 'str.minuscula') {
      $this->modo = 0;
    } else {
      /* Algum outro filtro str.* foi solicitado,
         reportar falha para que o PHP continue procurando */
      return false;
    }

    return true;
  }
}

/* Registra o filtro no PHP */
stream_filter_register("str.*", "filtro_string")
    or die("Falha ao registrar o filtro");

$fp = fopen("foo-bar.txt", "w");

/* Anexa o filtro registrado ao fluxo que acabou de ser aberto
   Pode-se alternativamente ligar a str.minuscula aqui */
stream_filter_append($fp, "str.maiuscula");

fwrite($fp, "Linha1\n");
fwrite($fp, "Palavra - 2\n");
fwrite($fp, "Facil Como 123\n");

fclose($fp);

/* Lê de volta o conteúdo
 */
readfile("foo-bar.txt");
?>
```

O exemplo acima produzirá:

```
LINHA1
PALAVRA - 2
FACIL COMO 123
```

### Veja também

- [stream\_wrapper\_register()](function.stream-wrapper-register.md) - Registra um empacotador URL implementado como uma classe PHP
- [stream\_filter\_append()](function.stream-filter-append.md) - Anexa um filtro a um fluxo
- [stream\_filter\_prepend()](function.stream-filter-prepend.md) - Anexa um filtro a um fluxo

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
