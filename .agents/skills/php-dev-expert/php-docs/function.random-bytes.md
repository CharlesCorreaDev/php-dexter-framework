# Obtém bytes aleatórios criptograficamente seguros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.random-bytes.php

---

# random\_bytes

(PHP 7, PHP 8)

random\_bytes — Obtém bytes aleatórios criptograficamente seguros

### Descrição

function **random\_bytes**([int](language.types.integer.md) `$length`): [string](language.types.string.md)

Gera uma string contendo bytes aleatórios selecionados uniformemente com o comprimento solicitado em `length`.

Como os bytes retornados são selecionados de forma completamente aleatória, é provável que a string resultante
contenha caracteres não imprimíveis ou sequências UTF-8 inválidas. Pode ser necessário
codificá-la antes da transmissão ou exibição.

A aleatoriedade gerada por esta função é adequada para todas as aplicações, incluindo
a geração de segredos de longo prazo, como chaves de criptografia.

As fontes de aleatoriedade usadas para esta função são as seguintes:

- Linux: [» getrandom()](https://man7.org/linux/man-pages/man2/getrandom.2.html), /dev/urandom
- FreeBSD >= 12 (PHP >= 7.3): [» getrandom()](https://man7.org/linux/man-pages/man2/getrandom.2.html), /dev/urandom
- Windows (PHP >= 7.2): [» CNG-API](https://docs.microsoft.com/en-us/windows/desktop/SecCNG/cng-portal)

  Windows: [» CryptGenRandom](https://msdn.microsoft.com/en-us/library/windows/desktop/aa379942(v=vs.85).aspx)
- macOS (PHP >= 8.2; >= 8.1.9; >= 8.0.22 se CCRandomGenerateBytes estiver disponível em tempo de compilação): CCRandomGenerateBytes()

  macOS (PHP >= 8.1; >= 8.0.2): arc4random\_buf(), /dev/urandom
- NetBSD >= 7 (PHP >= 7.1; >= 7.0.1): arc4random\_buf(), /dev/urandom
- OpenBSD >= 5.5 (PHP >= 7.1; >= 7.0.1): arc4random\_buf(), /dev/urandom
- DragonflyBSD (PHP >= 8.1): [» getrandom()](https://man7.org/linux/man-pages/man2/getrandom.2.html), /dev/urandom
- Solaris (PHP >= 8.1): [» getrandom()](https://man7.org/linux/man-pages/man2/getrandom.2.html), /dev/urandom
- Qualquer combinação de sistema operacional e versão do PHP não mencionada anteriormente: /dev/urandom
- Se nenhuma das fontes estiver disponível ou todas falharem em gerar
  aleatoriedade, então uma exceção [Random\RandomException](class.random-randomexception.md)
  será lançada.

> **Nota**:
>
> Embora esta função tenha sido adicionada ao PHP no PHP 7.0, uma
> [» implementação no espaço do usuário](https://github.com/paragonie/random_compat)
> está disponível para o PHP 5.2 ao 5.6, inclusive.

### Parâmetros

`length`
:   O comprimento da sequência aleatória que deve ser retornada em bytes; deve ser `1` ou superior.

### Valor Retornado

Uma string contendo o número solicitado de bytes aleatórios
criptograficamente seguros.

### Erros/Exceções

- Se uma fonte apropriada de aleatoriedade não puder ser encontrada,
  uma exceção [Random\RandomException](class.random-randomexception.md) será lançada.
- Se o valor de `length` for menor que `1`,
  um [ValueError](class.valueerror.md) será lançado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | No caso de uma falha de CSPRNG, esta função agora lançará uma [Random\RandomException](class.random-randomexception.md). Anteriormente, uma [Exception](class.exception.md) simples era lançada. |

### Examples

**Exemplo #1 Exemplo de **random\_bytes()****

```
<?php
$bytes = random_bytes(5);
var_dump(bin2hex($bytes));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(10) "385e33f741"
```

### Veja também

- [Random\Randomizer::getBytes()](random-randomizer.getbytes.md) - Obtém bytes aleatórios
- [random\_int()](function.random-int.md) - Obtém um número inteiro selecionado uniformemente e criptograficamente seguro
- [bin2hex()](function.bin2hex.md) - Converte um dado binário em representação hexadecimal
- [base64\_encode()](function.base64-encode.md) - Codifica dados com MIME base64

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
