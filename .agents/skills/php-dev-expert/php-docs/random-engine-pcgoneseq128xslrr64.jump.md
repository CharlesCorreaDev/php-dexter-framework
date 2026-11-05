# Move o mecanismo com eficiência para frente em várias etapas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-engine-pcgoneseq128xslrr64.jump.php

---

# Random\Engine\PcgOneseq128XslRr64::jump

(PHP 8 >= 8.2.0)

Random\Engine\PcgOneseq128XslRr64::jump — Move o mecanismo com eficiência para frente em várias etapas

### Descrição

public function **Random\Engine\PcgOneseq128XslRr64::jump**([int](language.types.integer.md) `$advance`): [void](language.types.void.md)

Avança o estado do algoritmo pelo número de passos dado por `advance`, como se
[Random\Engine\PcgOneseq128XslRr64::generate()](random-engine-pcgoneseq128xslrr64.generate.md) fosse chamado essa quantidade de vezes.

### Parâmetros

`advance`
:   O número de passos para avançar; deve ser `0` ou maior.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Se `advance` for menor que `0`,
  um [ValueError](class.valueerror.md) será gerado.

### Examples

**Exemplo #1 Exemplo de **Random\Engine\PcgOneseq128XslRr64::jump()****

```
<?php
$a = new \Random\Engine\PcgOneseq128XslRr64(0);
$b = clone $a;

for ($i = 0; $i < 1_000; $i++) {
    $a->generate();
}
$b->jump(1_000);

echo "A: ", bin2hex($a->generate()), "\n";
echo "B: ", bin2hex($b->generate()), "\n";
?>
```

O exemplo acima produzirá:

```
A: e6d0d5813913a424
B: e6d0d5813913a424
```

**Exemplo #2 Os métodos randomizadores podem chamar o mecanismo mais de uma vez**

```
<?php
$a = new \Random\Randomizer(new \Random\Engine\PcgOneseq128XslRr64(42659));
$b = new \Random\Randomizer(clone $a->engine);

$a->getInt(1, 1572864); // Executa duas chamadas para generate().
$a->getInt(1, 1572864);

$b->engine->jump(2);

// Porque a primeira chamada para ->getInt() chamou ->generate() duas vezes
// os mecanismos não correspondem após executar um ->jump(2).
echo "A: ", bin2hex($a->engine->generate()), "\n";
echo "B: ", bin2hex($b->engine->generate()), "\n";

// Agora o mecanismo B corresponde ao mecanismo A.
echo "B: ", bin2hex($b->engine->generate()), "\n";
?>
```

O exemplo acima produzirá:

```
A: 1e9f3107d56653d0
B: a156c0086dd79d44
B: 1e9f3107d56653d0
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
