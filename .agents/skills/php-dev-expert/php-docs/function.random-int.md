# Obtém um número inteiro selecionado uniformemente e criptograficamente seguro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.random-int.php

---

# random\_int

(PHP 7, PHP 8)

random\_int — Obtém um número inteiro selecionado uniformemente e criptograficamente seguro

### Descrição

function **random\_int**([int](language.types.integer.md) `$min`, [int](language.types.integer.md) `$max`): [int](language.types.integer.md)

Gera um número inteiro selecionado uniformemente entre o mínimo e o máximo fornecidos.

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

`min`
:   O menor valor a ser retornado.

`max`
:   O maior valor a ser retornado.

### Valor Retornado

Um número inteiro criptograficamente seguro e selecionado uniformemente do intervalo fechado
[`min`, `max`]. Ambos
`min` e `max` são
valores de retorno possíveis.

### Erros/Exceções

- Se uma fonte apropriada de aleatoriedade não puder ser encontrada,
  uma exceção [Random\RandomException](class.random-randomexception.md) será lançada.
- Se `max` é menor que `min`, um
  [ValueError](class.valueerror.md) será lançado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | No caso de uma falha de CSPRNG, esta função agora lançará um [Random\RandomException](class.random-randomexception.md). Anteriormente um raso [Exception](class.exception.md) era lançado. |

### Examples

**Exemplo #1 Exemplo de **random\_int()****

```
<?php
var_dump(random_int(100, 999));
var_dump(random_int(-1000, 0));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(248)
int(-898)
```

### Veja também

- [Random\Randomizer::getInt()](random-randomizer.getint.md) - Obtém um inteiro selecionado uniformemente
- [random\_bytes()](function.random-bytes.md) - Obtém bytes aleatórios criptograficamente seguros

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
