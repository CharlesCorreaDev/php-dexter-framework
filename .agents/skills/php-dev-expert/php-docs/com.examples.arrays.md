# Arrays e propriedades COM no estilo Array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/com.examples.arrays.php

---

## Arrays e propriedades COM no estilo Array

Muitos objetos COM expõem suas propriedades como arrays ou usando acesso
no estilo de array.

É possível:

- Acessar arrays multidimensionais ou propriedades COM que exigem
  múltiplos parâmetros usando a sintaxe de array do PHP. Pode-se também escrever ou definir
  propriedades usando esta técnica.
- Iterar sobre SafeArrays (arrays "verdadeiros") usando a estrutura de controle [`foreach`](control-structures.foreach.md).
  Isso funciona porque os SafeArrays incluem informações sobre seu tamanho. Se uma
  propriedade no estilo array implementar IEnumVariant, pode-se também poderá usar
  foreach para essa propriedade; consulte [For Each](com.examples.foreach.md) para obter mais informações sobre este tópico.

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
