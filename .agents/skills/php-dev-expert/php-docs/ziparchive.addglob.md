# Adicionar arquivos de um diretório por padrão glob

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.addglob.php

---

# ZipArchive::addGlob

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL zip >= 1.9.0)

ZipArchive::addGlob — Adicionar arquivos de um diretório por padrão glob

### Descrição

public function **ZipArchive::addGlob**([string](language.types.string.md) `$pattern`, [int](language.types.integer.md) `$flags` = 0, [array](language.types.array.md) `$options` = []): [array](language.types.array.md)|[false](language.types.singleton.md)

Adiciona arquivos de um diretório que correspondem ao `pattern` glob.

> **Nota**:
>
> Para portabilidade máxima, é recomendável sempre usar barras normais (`/`) como separador de diretório em nomes de arquivos ZIP.

### Parâmetros

`pattern`
:   Um padrão [glob()](function.glob.md) contra o qual os arquivos serão correspondidos.

`flags`
:   Uma máscara de bits de opções `glob()`.

`options`
:   Um array associativo de opções. As opções disponíveis são:

    - `"add_path"`

      Prefixo a ser adicionado ao traduzir para o caminho local do arquivo dentro
      do arquivo. Isso é aplicado após quaisquer operações de remoção definidas pelas
      opções `"remove_path"` ou
      `"remove_all_path"`.
    - `"remove_path"`

      Prefixo a ser removido dos caminhos de arquivo correspondentes antes de serem adicionados ao arquivo.
    - `"remove_all_path"`

      **`true`** para usar apenas o nome do arquivo e adicionar à raiz do arquivo.
    - `"flags"`

      Máscara de bits consistindo em
      **`ZipArchive::FL_OVERWRITE`**,
      **`ZipArchive::FL_ENC_GUESS`**,
      **`ZipArchive::FL_ENC_UTF_8`**,
      **`ZipArchive::FL_ENC_CP437`**,
      **`ZipArchive::FL_OPEN_FILE_NOW`**.
      O comportamento dessas constantes é descrito na página de
      [constantes ZIP](zip.constants.md).
    - `"comp_method"`

      Método de compressão, uma das constantes
      **`ZipArchive::CM_*`**,
    - `"comp_flags"`

      Nível de compressão.
    - `"enc_method"`

      Método de criptografia, um dos constantes
      **`ZipArchive::EM_*`**.
    - `"enc_password"`

      Senha usada para criptografia.

### Valor Retornado

Um [array](language.types.array.md) de arquivos adicionados em caso de sucesso ou **`false`** em caso de falha

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0, PECL zip 1.18.0 | `"flags"` em `options` foi adicionado. |
| 8.0.0, PECL zip 1.18.1 | `"comp_method"`, `"comp_flags"`, `"enc_method"` e `"enc_password"` em `options` foram adicionados. |
| 8.3.0, PECL zip 1.22.1 | **`ZipArchive::FL_OPEN_FILE_NOW`** foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **ZipArchive::addGlob()****

Adiciona todos os scripts php e arquivos de texto do diretório de trabalho atual

```
<?php
$zip = new ZipArchive();
$ret = $zip->open('application.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
if ($ret !== TRUE) {
    printf('Falha com código %d', $ret);
} else {
    $options = array('add_path' => 'sources/', 'remove_all_path' => TRUE);
    $zip->addGlob('*.{php,txt}', GLOB_BRACE, $options);
    $zip->close();
}
?>
```

### Veja também

- [ZipArchive::addFile()](ziparchive.addfile.md) - Adiciona um arquivo a um arquivo ZIP a partir do caminho fornecido
- [ZipArchive::addPattern()](ziparchive.addpattern.md) - Adiciona arquivos de um diretório por padrão PCRE

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
