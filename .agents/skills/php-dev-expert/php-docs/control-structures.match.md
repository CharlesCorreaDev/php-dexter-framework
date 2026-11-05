# match

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.match.php

---

## match

(PHP 8)

A expressão `match` ramifica a avaliação baseada em uma
verificação de identidade de um valor.
Semelhante a uma declaração `switch`, uma
expressão `match` possui uma expressão sujeito que é
comparada com múltiplas alternativas. Ao contrário da `switch`,
ela irá avaliar para um valor assim como as expressões ternárias.
Diferente da `switch`, a comparação é uma verificação de identidade
(`===`) em vez de uma comparação de igualdade fraca (`==`).
Expressões match estão disponíveis a partir do PHP 8.0.0.

**Exemplo #1 Estrutura de uma expressão `match`**

```
<?php
$valor_de_retorno = match (expressao_sujeito) {
    expressao_condicional_unica => expressao_de_retorno,
    expressao_condicional1, expressao_condicional2 => expressao_de_retorno,
};
```

**Exemplo #2 Uso básico de `match`**

```
<?php
$comida = 'bolo';

$valor_de_retorno = match ($comida) {
    'apple' => 'Essa comida é uma maçã',
    'bar' => 'Essa comida é um bar',
    'bolo' => 'Essa comida é um bolo',
};

var_dump($valor_de_retorno);
```

O exemplo acima produzirá:

```
string(19) "Essa comida é um bolo"
```

**Exemplo #3 Exemplo de uso de `match` com operadores de comparação**

```
<?php
$age = 18;

$output = match (true) {
    $age < 2 => "Bebê",
    $age < 13 => "Criança",
    $age <= 19 => "Adolescente",
    $age >= 40 => "Adulto"
    $age > 19 => "Adulto Jovem"
};

var_dump($output);
```

O exemplo acima produzirá:

```
string(11) "Adolescente"
```

> **Nota**:
>
> O resultado de uma expressão `match` não precisa ser usado.

> **Nota**:
>
> Quando uma expressão `match` é usada como uma expressão
> única, ela *precisa* ser terminada
> com um ponto-e-vírgula `;`.

A expressão `match` é similar a uma
declaração `switch` mas tem algumas diferenças importantes:

- Um braço `match` compara valores estritamente (`===`) em vez
  de frouxamente como a declaração switch faz.
- Uma expressão `match` retorna um valor.
- Braços `match` não seguem para casos posteriores da maneira
  que declarações `switch` seguem.
- Uma expressão `match` deve ser exaustiva.

Assim como as declarações `switch`, expressões
`match` são executadas a cada ramo de correspondência.
No início, nenhum código é executado.
As expressões condicionais só são avaliadas se todas as expressões condicionais
anteriores não corresponderem à expressão sujeito.
Apenas a expressão de retorno pertencente à expressão condicional
de correspondência será avaliada.
Por exemplo:

```
<?php
$resultado = match ($x) {
    foo() => 'value',
    $this->bar() => 'value', // $this->bar() não é chamado se foo() === $x
    $this->baz => beep(), // beep() não é chamado a não ser que $x === $this->baz
    // etc.
};
```

Braços da expressão `match` podem conter múltiplas expressões
separadas por uma vírgula. Isso é um OR lógico, e é uma forma abreviada para múltiplos
braços de correspondência com o mesmo lado direito.

```
<?php
$resultado = match ($x) {
    // Este braço de correspondência:
    $a, $b, $c => 5,
    // É equivalente a estes três braços de correspondência:
    $a => 5,
    $b => 5,
    $c => 5,
};
```

Um caso especial é o padrão `default`.
Esse padrão atende a qualquer coisa que não tenha sido correspondida anteriormente.
Por exemplo:

```
<?php
$resultadoDaExpressao = match ($condicao) {
    1, 2 => foo(),
    3, 4 => bar(),
    default => baz(),
};
```

> **Nota**:
>
> Múltiplos padrões 'default' irão emitir um
> erro **`E_FATAL_ERROR`**.

Uma expressão `match` deve ser exaustiva. Se a
expressão sujeito não for tratada por nenhum braço de correspondência um
[UnhandledMatchError](class.unhandledmatcherror.md) é lançado.

**Exemplo #4 Exemplo de uma expressão match não tratada**

```
<?php
$condicao = 5;

try {
    match ($condicao) {
        1, 2 => foo(),
        3, 4 => bar(),
    };
} catch (\UnhandledMatchError $e) {
    var_dump($e);
}
```

O exemplo acima produzirá:

```
object(UnhandledMatchError)#1 (7) {
  ["message":protected]=>
  string(22) "Unhandled match case 5"
  ["string":"Error":private]=>
  string(0) ""
  ["code":protected]=>
  int(0)
  ["file":protected]=>
  string(6) "script"
  ["line":protected]=>
  int(5)
  ["trace":"Error":private]=>
  array(0) {
  }
  ["previous":"Error":private]=>
  NULL
}
```

### Usando expressões match para tratar verificações sem identidade

É possível usar uma expressão `match` para tratar
casos condicionais sem identidade usando `true` como a expressão
sujeito.

**Exemplo #5 Usando uma expressão match generalizada para ramificar com base em intervalos de inteiros**

```
<?php
$idade = 23;

$resultado = match (true) {
    $idade >= 65 => 'senhor',
    $idade >= 25 => 'adulto',
    $idade >= 18 => 'adolescente',
    default => 'criança',
};

var_dump($resultado);
```

O exemplo acima produzirá:

```
string(11) "adolescente"
```

**Exemplo #6 Usando uma expressão match generalizada para ramificar com base no conteúdo de strings**

```
<?php

$texto = 'Bienvenue chez nous';

$resultado = match (true) {
    str_contains($text, 'Welcome'), str_contains($text, 'Hello') => 'en',
    str_contains($text, 'Bienvenue'), str_contains($text, 'Bonjour') => 'fr',
    // ...
};

var_dump($resultado);
```

O exemplo acima produzirá:

```
string(2) "fr"
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
