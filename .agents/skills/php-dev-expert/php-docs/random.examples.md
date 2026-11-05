# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random.examples.php

---

# Examples

**Exemplo #1 Exemplo de Random**

```
<?php
$r = new \Random\Randomizer();

// Gerando um nome de domínio aleatório
printf(
    "%s.example.com\n",
    $r->getBytesFromString('abcdefghijklmnopqrstuvwxyz0123456789', 16)
);

// Embaralhando um array:
$fruits = [ 'vermelho' => '🍎', 'verde' => '🥝', 'amarelo' => '🍌', 'rosa' => '🍑', 'roxo' => '🍇' ];
echo "Salada: ", implode(', ', $r->shuffleArray($fruits)), "\n";

// Embaralhando chaves de array
$fruits = [ 'vermelho' => '🍎', 'verde' => '🥝', 'amarelo' => '🍌', 'rosa' => '🍑', 'roxo' => '🍇' ];

$keys = $r->pickArrayKeys($fruits, 2);
// Procurando os valores para as chaves escolhidas.
$selection = array_map(
    static fn ($key) => $fruits[$key],
    $keys
);

echo "Valores: ", implode(', ', $selection), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
j87fzv1p0daiwmlo.example.com
Salada: 🥝, 🍇, 🍎, 🍌, 🍑
Valores: 🍌, 🍑
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
