# Grava o objeto em um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/compersisthelper.savetofile.php

---

# COMPersistHelper::SaveToFile

(PHP 5, PHP 7, PHP 8)

COMPersistHelper::SaveToFile — Grava o objeto em um arquivo

### Descrição

public function **COMPersistHelper::SaveToFile**([?](language.types.null.md)[string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$remember` = **`true`**): [bool](language.types.boolean.md)

Grava uma cópia do objeto no arquivo especificado.

### Parâmetros

`filename`
:   O nome do arquivo onde o objeto será gravado.

`remember`
:   Indica se o parâmetro `filename` deve ser usado como o arquivo de
    trabalho atual. Se **`true`**, `filename` se torna o arquivo atual e o
    objeto deverá limpar seu sinalizador de alterações pendentes após a gravação. Se **`false`**, esta operação de gravação será
    uma operação "Salvar uma cópia como ...". Nesse caso, o arquivo atual permanece inalterado e o objeto
    não deve limpar seu sinalizador de alterações pendentes.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Uma [com\_exception](class.com-exception.md) é lançada se o objeto associado não
implementar a interface COM **IPersistFile**,
ou se a chamada ao método **IPersistFile::Save()** falhar.

### Examples

**Exemplo #1 Uso básico de **COMPersistHelper::saveToFile()****

```
<?php
$word = new COM('Word.Application');
$doc = $word->Documents->Add();
$ph = new COMPersistHelper($doc);
$ph->SaveToFile('C:\\Users\\cmb\\Documents\\my.docx');
$word->Quit();
?>
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
