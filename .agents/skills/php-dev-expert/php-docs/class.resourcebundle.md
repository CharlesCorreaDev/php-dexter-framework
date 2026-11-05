# A classe ResourceBundle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.resourcebundle.php

---

# A classe ResourceBundle

(PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0)

## Introdução

Produtos de software específicos para localiades frequentemente requerem conjuntos de dados que devem ser customizados
dependendo da localidade atual, ex.: mensagens, etiquetas, modelos de formatação. O mecanismo
de recursos da ICU permite definir conjuntos de recursos que a aplicação pode carregar
com base na localidade, enquanto acessa-as em uma maneira unificada, independente de localidade.

Esta classe implemente o acesso aos arquivos de dados de recursos ICU. Estes arquivos são arrays de dados
binários que a ICU usa para armazenar os dados de localidade.

O pacote de recursos ICU pode ter recursos simples e complexos. Recursos complexos
são contêineres que podem ser indexados com números inteiros ou strings (da mesma forma que arrays PHP).
Recursos simples podem ser dos seguintes tipos: string, inteiro, campo de dado binário
ou array inteiro.

**ResourceBundle** suporta acesso direto aos dados através de padrão de
acesso a array e iteração através de [foreach](control-structures.foreach.md),
assim como acesso por métodos de classe. O resultado será um valor PHP para os recursos simples e
um objeto **ResourceBundle** para os complexos. Todos os recursos são somente-leitura.

## Resumo da classe

class ****ResourceBundle****
implements
[IteratorAggregate](class.iteratoraggregate.md),
[Countable](class.countable.md) {

/\* Métodos \*/

public function [\_\_construct](resourcebundle.create.md)([?](language.types.null.md)[string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$bundle`, [bool](language.types.boolean.md) `$fallback` = **`true`**)

public function [count](resourcebundle.count.md)(): [int](language.types.integer.md)

public static function [create](resourcebundle.create.md)([?](language.types.null.md)[string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$bundle`, [bool](language.types.boolean.md) `$fallback` = **`true`**): [?](language.types.null.md)[ResourceBundle](class.resourcebundle.md)

public function [get](resourcebundle.get.md)([string](language.types.string.md)|[int](language.types.integer.md) `$index`, [bool](language.types.boolean.md) `$fallback` = **`true`**): [ResourceBundle](class.resourcebundle.md)|[array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md)

public function [getErrorCode](resourcebundle.geterrorcode.md)(): [int](language.types.integer.md)

public function [getErrorMessage](resourcebundle.geterrormessage.md)(): [string](language.types.string.md)

public static function [getLocales](resourcebundle.locales.md)([string](language.types.string.md) `$bundle`): [array](language.types.array.md)|[false](language.types.singleton.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **ResourceBundle** implementa [IteratorAggregate](class.iteratoraggregate.md) agora. Anteriormente, [Traversable](class.traversable.md) era implementado no lugar. |
| 7.4.0 | **ResourceBundle** implementa [Countable](class.countable.md) agora. |

## Veja também

- [» 
  Gereciamento de Recursos ICU](https://unicode-org.github.io/icu/userguide/locale/resources.html)
- [» Dados ICU](https://unicode-org.github.io/icu/userguide/icu_data/)

## Índice

- [ResourceBundle::count](resourcebundle.count.md) — Obtém o número de elementos no pacote
- [ResourceBundle::create](resourcebundle.create.md) — Cria um pacote de recursos
- [ResourceBundle::get](resourcebundle.get.md) — Obtém os dados do pacote
- [ResourceBundle::getErrorCode](resourcebundle.geterrorcode.md) — Obtém o código do último erro gerado pelo pacote.
- [ResourceBundle::getErrorMessage](resourcebundle.geterrormessage.md) — Obtém a última mensagem de erro gerada pelo pacote
- [ResourceBundle::getLocales](resourcebundle.locales.md) — Obtém as localidades suportadas

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
