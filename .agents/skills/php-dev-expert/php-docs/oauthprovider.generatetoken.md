# Gera um token aleatório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.generatetoken.php

---

# OAuthProvider::generateToken

(PECL OAuth >= 1.0.0)

OAuthProvider::generateToken — Gera um token aleatório

### Descrição

final public static function **OAuthProvider::generateToken**([int](language.types.integer.md) `$size`, [bool](language.types.boolean.md) `$strong` = **`false`**): [string](language.types.string.md)

Gera uma [string](language.types.string.md) de bytes pseudo-randômicos.

### Parâmetros

`size`
:   O comprimento desejado do token, em bytes.

`strong`
:   Definir para **`true`** significa que `/dev/random` será usado para
    entropia, caso contrário `/dev/urandom` (de não-bloqueio) será usado.
    Este parâmetro é ignorado no Windows.

### Valor Retornado

O token gerado, como uma [string](language.types.string.md) de bytes.

### Erros/Exceções

Se o parâmetro `strong` for **`true`**, um erro
de nível **`E_WARNING`** será emitido quando a
implementação de [rand()](function.rand.md) for usada para preencher
os bytes aleatórios remanescentes (ex.: quando não forem encontrados dados aleatórios suficientes
inicialmente).

### Examples

**Exemplo #1 Exemplo de **OAuthProvider::generateToken()****

```
<?php
$p = new OAuthProvider();

$t = $p->generateToken(4);

echo strlen($t),  PHP_EOL;
echo bin2hex($t), PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
4
b6a82c27
```

### Notas

> **Nota**:
>
> Quando dados aleatórios insuficientes estiverem disponíveis ao sistema, esta função irá
> preencher os bytes aleatórios remanescentes usando a implementação [rand()](function.rand.md)
> interna do PHP.

### Veja também

- [openssl\_random\_pseudo\_bytes()](function.openssl-random-pseudo-bytes.md) - Gera uma sequência pseudo-aleatória de bytes
- [mcrypt\_create\_iv()](function.mcrypt-create-iv.md) - Cria um vetor de inicialização (IV) a partir de uma fonte aleatória

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
