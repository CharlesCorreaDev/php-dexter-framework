# A classe Normalizer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.normalizer.php

---

# A classe Normalizer

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

## Introdução

Normalização é um processo que envolve transformar caracteres e
sequências de caracteres em uma representação subjacente formalmente definida.
Este processo é mais importante quando o texto precisa ser comparado para ordenação
e pesquisa, mas também é usado ao armazenar texto para garantir que
seja armazenado em uma representação consistente.

O Consórcio Unicode definiu um número de formas de normalização
refletindo as várias necessidades das aplicações:

- Forma de Normalização D (NFD) - Decomposição Canônica
- Forma de Normalização C (NFC) - Decomposição Canônica seguida por
  Composição Canônica
- Forma de Normalização KD (NFKD) - Decomposição de Compatibilidade
- Forma de Normalização KC (NFKC) - Decomposição de Compatibilidade seguida por
  Composição Canônica

As diferentes formas são definidas em termos de um conjunto de transformações no
texto, que são expressas por um algoritmo em por um conjunto
de arquivos de dados.

## Resumo da classe

class ****Normalizer****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[FORM\_D](class.normalizer.md#normalizer.constants.form-d);

public
const
[int](language.types.integer.md)
[NFD](class.normalizer.md#normalizer.constants.nfd);

public
const
[int](language.types.integer.md)
[FORM\_KD](class.normalizer.md#normalizer.constants.form-kd);

public
const
[int](language.types.integer.md)
[NFKD](class.normalizer.md#normalizer.constants.nfkd);

public
const
[int](language.types.integer.md)
[FORM\_C](class.normalizer.md#normalizer.constants.form-c);

public
const
[int](language.types.integer.md)
[NFC](class.normalizer.md#normalizer.constants.nfc);

public
const
[int](language.types.integer.md)
[FORM\_KC](class.normalizer.md#normalizer.constants.form-kc);

public
const
[int](language.types.integer.md)
[NFKC](class.normalizer.md#normalizer.constants.nfkc);

public
const
[int](language.types.integer.md)
[FORM\_KC\_CF](class.normalizer.md#normalizer.constants.form-kc-cf);

public
const
[int](language.types.integer.md)
[NFKC\_CF](class.normalizer.md#normalizer.constants.nfkc-cf);

/\* Métodos \*/

public static function [getRawDecomposition](normalizer.getrawdecomposition.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$form` = **`Normalizer::FORM_C`**): [?](language.types.null.md)[string](language.types.string.md)

public static function [isNormalized](normalizer.isnormalized.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$form` = **`Normalizer::FORM_C`**): [bool](language.types.boolean.md)

public static function [normalize](normalizer.normalize.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$form` = **`Normalizer::FORM_C`**): [string](language.types.string.md)|[false](language.types.singleton.md)

}

## Constantes predefinidas

As seguintes constantes definem a forma de normalização usada pelo
normalizador:

**`Normalizer::FORM_C`** [int](language.types.integer.md)
:   Forma de Normalização C (NFC) - Decomposição Canônica seguida por
    Composição Canônica

**`Normalizer::FORM_D`** [int](language.types.integer.md)
:   Forma de Normalização D (NFD) - Decomposição Canônica

**`Normalizer::NFD`** [int](language.types.integer.md)

**`Normalizer::FORM_KC`** [int](language.types.integer.md)
:   Forma de Normalização KC (NFKC) - Decomposição de Compatibilidade, seguida por
    Composição Canônica

**`Normalizer::NFKC`** [int](language.types.integer.md)

**`Normalizer::FORM_KC_CF`** [int](language.types.integer.md)

**`Normalizer::FORM_KD`** [int](language.types.integer.md)
:   Forma de Normalização KD (NFKD) - Decomposição de Compatibilidade

**`Normalizer::NFKD`** [int](language.types.integer.md)

**`Normalizer::NFC`** [int](language.types.integer.md)

**`Normalizer::NFKC_CF`** [int](language.types.integer.md)

## Veja também

- [» 
  Normalização Unicode](https://unicode.org/reports/tr15/)
- [» 
  Perguntas Frequentes sobre Normalização Unicode](https://unicode.org/faq/normalization.html)
- [» 
  Guia do Usuário ICU - Normalização](https://unicode-org.github.io/icu/userguide/transforms/normalization/)
- [» 
  Referência da API ICU - Normalização](https://unicode-org.github.io/icu-docs/apidoc/dev/icu4c/unorm_8h.html)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 8.0.0 | **`Normalizer::NONE`** foi removida. |

## Índice

- [Normalizer::getRawDecomposition](normalizer.getrawdecomposition.md) — Obtém a propriedade Decomposition\_Mapping para o ponto de código UTF-8 fornecido
- [Normalizer::isNormalized](normalizer.isnormalized.md) — Verifica se a string fornecida já está normalizada
  na forma especificada.
- [Normalizer::normalize](normalizer.normalize.md) — Normaliza a entrada fornecida e retorna a string normalizada

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
