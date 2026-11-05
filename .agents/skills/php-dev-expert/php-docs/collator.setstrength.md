# Define a força do agrupador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.setstrength.php

---

# Collator::setStrength

# collator\_set\_strength

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::setStrength -- collator\_set\_strength — Define a força do agrupador

### Descrição

Estilo orientado a objetos

public function **Collator::setStrength**([int](language.types.integer.md) `$strength`): [true](language.types.singleton.md)

Estilo procedural

function **collator\_set\_strength**([Collator](class.collator.md) `$object`, [int](language.types.integer.md) `$strength`): [true](language.types.singleton.md)

O Serviço de Agrupamento
[» ICU](https://icu.unicode.org/)
suporta vários níveis de comparação, também chamados
de "forças" ("strengths"). Estas categorias permitem à ICU ordenar
strings com precisão conforme convenções locais. Entretanto, ao permitir que
os níveis sejam seletivamente empregados, a pesquisa por uma string em um texto pode
ser realizada com várias condições de correspondência.

1. *Nível primário*:
   Tipicamento usado para indicar diferenças entre caracteres base
   (por exemplo "a" < "b"). É a diferença mais forte. Por
   exemplo, dicionários são divididos em seções por caractere
   base. É também chamado de força nível 1 (`level 1`).
2. *Nível secundário*:
   Acentuações nos caracteres são consideradas diferenças secundárias (por
   exemplo, "as" < "às" < "at"). Outras diferenças entre letras podem
   também ser consideradas secundárias, dependendo da língua.
   Uma diferença secundária é ignorada quando existir uma diferença primária
   em qualquer lugar nas strings. Também chamado de força nível 2 (`level 2`).
   > **Nota**:
   >
   > Nota: Em algumas línguas (como o dinamarquês), certas letras acentuadas são
   > consideradas como caracteres base separados. Na maioria da línguas, entretanto,
   > uma letra com acentuação tem apenas diferença secundária em relação
   > à versão não acentuada dessa letra.
3. *Nível terciário*:
   Diferenças de maiúsculas e minúsculas são distinguidas no
   nível terciário (por exemplo, "ao" < "Ao" < "aò"). Além disso,
   uma variante de uma letra se diferencia da forma base no nível terciário
   (como "a" e "𝒶"). Outro exemplo é a diferença entre o Kana grande e o
   pequeno. Uma diferença terciária é ignorada quando existir uma diferença primária
   ou secundária em qualquer lugar nas strings. Também chamado de força
   nível 3 (`level 3`).
4. *Nível quaternário*:
   Quando a pontuação é ignorada (consulte Ignorando Pontuaçõs) em níveis 1-3,
   um nível adicional pode ser usado para distinguir palavras com e sem
   pontuação (por exemplo, "ab" < "a-b" < "aB"). Esta diferença é
   ignorada quando há uma diferença primária, secundária ou terciária. Também
   conhecida como força nível 4 (`level 4`). O nível quaternário deve
   ser usado apenas se for requerido ignorar a pontuação ou ao processar texto
   em japonês (consulte processamento de Hiragana).
5. *Nível idêntico*:
   Quando todos os outros níveis são iguais, o nível idêntico é usado como um
   desempate. Os valores de ponto de código Unicode para a forma NFD de cada string
   são comparados neste nível, apenas caso não haja nenhuma diferença nos
   níveis 1 a 4. Por exemplo, os sinais hebraicos de cantilação somente são distinguidos
   neste nível. Este nível deve ser usado com moderação, já que diferenças somente de valores
   de ponto de código entre duas strings é uma ocorrência extremamente rara.
   Usar este nível diminui consideravelmente o desempenho tanto para
   comparação incremental quanto para geração de chave de ordenação (e também aumenta
   o comprimento da chave). Também conhecido como força nível 5 (`level 5`).

Por exemplo, pode-se decidir por ignorar acentuação ou ignorar tanto acentuação quanto
maiúsculas e minúsculas ao pesquisar por texto. Quase todos os caracteres são diferenciáveis
pelos primeiros três níveis e por isso, na maior parte das localidades, o valor padrão é o terciário.
Entratanto, se a opção ALTERNATE for definida para SHIFTED, a força quaternária
pode ser usada para desempatar entre espaços em branco, pontuação e símbolos que
em outros casos seriam ignorados. Se uma distinção muito fina entre caracteres for
necessária, o nível idêntico pode ser usado (por exemplo, o nível idêntico
distingue entre a letra "a" minúscula matemática em negrito e a
letra "a" minúscula matemática em itálico). Entretanto, usar níveis mais altos que o terciário
resulta em chaves de ordenação significativamente mais longas, e desempenho
mais lento de comparação para strings iguais.

### Parâmetros

`object`
:   Objeto [Collator](class.collator.md).

`strength`
:   Força a ser definida.

    Valores possíveis são:

    - **`Collator::PRIMARY`**
    - **`Collator::SECONDARY`**
    - **`Collator::TERTIARY`**
    - **`Collator::QUATERNARY`**
    - **`Collator::IDENTICAL`**
    - **`Collator::DEFAULT_STRENGTH`**

### Valor Retornado

Sempre retorna **`true`**.

### Examples

**Exemplo #1 Exemplo de **collator\_set\_strength()****

```
<?php
$arr  = array( 'aò', 'Ao', 'ao' );
$coll = collator_create( 'en_US' );

// Ordena o array usando a força padrão.
collator_sort( $coll, $arr );
var_export( $arr );

// Ordena o array usando a força primária.
collator_set_strength( $coll, Collator::PRIMARY );
collator_sort( $coll, $arr );
var_export( $arr );
?>
```

O exemplo acima produzirá:

```
array (
  0 => 'ao',
  1 => 'Ao',
  2 => 'aò',
)
array (
  0 => 'aò',
  1 => 'Ao',
  2 => 'ao',
)
```

### Veja também

- [Constantes de Collator](class.collator.md#intl.collator-constants)
- [collator\_get\_strength()](collator.getstrength.md) - Obtém a força atual de agrupamento

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
