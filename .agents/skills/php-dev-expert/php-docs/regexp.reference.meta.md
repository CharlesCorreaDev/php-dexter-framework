# Metacaracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.meta.php

---

## Metacaracteres

O poder das expressões regulares vem da
habilidade de incluir alternativas e repetições na
expressão. Elas são codificadas na expressão pelo uso de
*metacaracteres*, que não representam a si mesmos mas ao invés disso
são interpretados de um modo especial.

Existem dois conjuntos diferentes de metacaracteres: aqueles que
são reconhecidos em qualquer lugar na expressão exceto quando estão dentro de
colchetes, e aqueles que são reconhecidos dentro de colchetes.
Fora de colchetes, os metacaracteres são:

**Metacaracteres fora de colchetes**

| Metacaractere | Descrição |
| --- | --- |
| \ | caractere de escape geral com vários usos |
| ^ | declara início da string (ou da linha, em modo multi-linhas) |
| $ | declara o final da string ou posição antes de um caractere de nova linha (ou final da linha, em modo multi-linhas) |
| . | corresponde a qualquer caractere exceto nova linha (por padrão) |
| [ | inicia definição de classe de caractere |
| ] | termina definição de classe de caractere |
| | | início de ramo alternativo |
| ( | início de sub-expressão |
| ) | fim de sub-expressão |
| ? | estende o significado de (, também significa quantificador 0 ou 1, e também torna preguiçosos os quantificadores gananciosos (consulte [repetição](regexp.reference.repetition.md)) |
| \* | quantificador de 0 ou mais |
| + | quantificador de 1 ou mais |
| { | inicia quantificador de mínimo/máximo |
| } | termina quantificador de mínimo/máximo |

A parte de uma expressão dentro de colchetes é chamada de
[classe de caractere](regexp.reference.character-classes.md). Em uma classe de caractere os únicos
metacaracteres são:

**Metacaracteres dentro de colchetes (*classes de caracteres*)**

| Metacaractere | Descrição |
| --- | --- |
| \ | caractere de escape geral |
| ^ | nega a classe, mas apenas se for o primeiro caractere |
| - | indica a faixa de caracteres |

As seções a seguir descrevem o uso de cada um dos
metacaracteres.

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
