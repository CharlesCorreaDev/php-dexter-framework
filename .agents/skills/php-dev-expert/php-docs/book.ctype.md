# Verificação de tipo de caractere

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.ctype.php

---

# Verificação de tipo de caractere

# Introdução

As funções providas por esta extensão verificam se um caractere
ou uma string está dentro de uma certa classe de caracteres de acordo
com a localidade atual (veja também [setlocale()](function.setlocale.md)).

Quando chamada com um argumento inteiro, estas funções
comportam-se exatamente como ocorre na linguagem C usando
ctype.h.
Significa que, se for passado um inteiro menor que 256, será usado o
valor ASCII dele para conferir se está dentro do intervalo especificado (dígitos
estão entre 0x30-0x39). Se o número estiver entre -128 e -1 (inclusive), será
adicionado 256 e a verificação estará concluída.

**Aviso**

A partir do PHP 8.1.0, passar um argumento que não seja string foi descontinuado.
No futuro, o argumento será interpretado como uma string em vez de um ponto de código ASCII.
Dependendo do comportamento esperado, o argumento deve ser convertido para [string](language.types.string.md)
ou uma chamada explícita para [chr()](function.chr.md) deve ser feita.

Quando chamada com uma string como argumento ela irá verificar
todos os caracteres na string e somente retornará
**`true`** se todos os caracteres da string corresponderem ao
o critério solicitado. Quando chamada com uma string vazia, o resultado sempre será **`false`**.

Se for passado qualquer tipo diferente de string ou inteiro a função
retornará **`false`**.

Note que funções "ctype" são sempre preferenciais em relação às
expressões regulares, e em relação às funções equivalentes `"str_*"` e `"is_*"`.
O motivo é que "ctype" usa a biblioteca nativa C e assim
tem um processamento significativamente mais rápido.

> **Nota**:
>
> Estas funções não estão relacionadas às da biblioteca "ctypes" do Python.
> O nome da extensão vem do arquivo de cabeçalho ctype.h
> onde suas funções equivalentes em C são definidas.
>
> Esta extensão também é anterior à biblioteca "ctypes" do Python, então qualquer confusão
> causada por conta da nomenclatura dificilmente é por conta do PHP.

- [Instalação/Configuração](ctype.setup.md)
  - [Dependências](ctype.requirements.md)
  - [Instalação](ctype.installation.md)
- [Funções da Ctype](ref.ctype.md)
  - [ctype\_alnum](function.ctype-alnum.md) — Verifica se os caracteres são alfanuméricos
  - [ctype\_alpha](function.ctype-alpha.md) — Verifica se os caracteres são alfabéticos
  - [ctype\_cntrl](function.ctype-cntrl.md) — Verifica se os caracteres são de controle
  - [ctype\_digit](function.ctype-digit.md) — Verifica se os caracteres são numéricos
  - [ctype\_graph](function.ctype-graph.md) — Verifica se os caracteres são imprimíveis exceto espaço
  - [ctype\_lower](function.ctype-lower.md) — Verifica se os caracteres são minúsculos
  - [ctype\_print](function.ctype-print.md) — Verifica se os caracteres são imprimíveis
  - [ctype\_punct](function.ctype-punct.md) — Verifica se é um caractere imprimível que não é um caractere de espaço ou
    alfanumério
  - [ctype\_space](function.ctype-space.md) — Verifica se os caracteres são espaço em branco
  - [ctype\_upper](function.ctype-upper.md) — Verifica se os caracteres são maiúsculos
  - [ctype\_xdigit](function.ctype-xdigit.md) — Verifica se os caracteres representam um dígito hexadecimal

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
