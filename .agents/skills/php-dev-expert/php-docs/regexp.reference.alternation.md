# Alternância

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.alternation.php

---

## Alternância

Caracteres de barra vertical "|" são usados para separar expressões
alternativas. Por exemplo, a expressão
`gilbert|sullivan`
correspondem tanto a "gilbert" quanto a "sullivan". Qualquer número de alternativas
pode ser usado, e uma alternativa vazia é permitida
(correspondendo a uma string vazia). O processo de correspondência testa
uma alternativa de cada vez, da esquerda para a direita, e a primeira
bem-sucedida é usada. Se as alternativas estiverem dentro de
uma sub-expressão (definida abaixo), "bem-sucedida" significa correspondência ao
restante da expressão principal assim como à alternativa dentro da
sub-expressão.

É possível registrar qual alternativa foi correspondida usando
`(*MARK:NAME)` ou `(*:NAME)`.
Qualquer número desses verbos `(*MARK)` pode aparecer e seus
nomes não precisam ser únicos. Quando uma correspondência for bem-sucedida, o nome do
último `(*MARK:NAME)` encontrado será colocado entre
as correspondências como se fosse um grupo de captura chamado `MARK` para que
possa ser lido a partir dos `matches` de
[preg\_match()](function.preg-match.md) e será passado para o
`callback` de [preg\_replace\_callback()](function.preg-replace-callback.md) etc.

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
