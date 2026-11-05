# Produz todos os dados restantes em um ponteiro de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fpassthru.php

---

# SplFileObject::fpassthru

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::fpassthru — Produz todos os dados restantes em um ponteiro de arquivo

### Descrição

public function **SplFileObject::fpassthru**(): [int](language.types.integer.md)

Lê até o EOF no ponteiro de arquivo fornecido a partir da posição atual e
escreve os resultados no buffer de saída.

Você pode precisar chamar [SplFileObject::rewind()](splfileobject.rewind.md) para redefinir o ponteiro de arquivo
para o início do arquivo se você já tiver escrito dados
para o arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de caracteres lidos de `handle`
e passados para a saída.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fpassthru()****

```
<?php

// Abre o arquivo em modo binário
$file = new SplFileObject("./img/ok.png", "rb");

// Envia os cabeçalhos corretos
header("Content-Type: image/png");
header("Content-Length: " . $file->getSize());

// Exibe a imagem e encerra o script
$file->fpassthru();
exit;

?>
```

### Veja também

- [fpassthru()](function.fpassthru.md) - Imprime todos os dados restantes de um ponteiro de arquivo

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
