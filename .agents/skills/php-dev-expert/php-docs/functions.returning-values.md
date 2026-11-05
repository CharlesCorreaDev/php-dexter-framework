# Retornando valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/functions.returning-values.php

---

## Retornando valores

Os valores podem ser retornados utilizando a instrução opcional return. Qualquer
tipo pode ser retornado, incluindo arrays e objetos. Isto faz com que
as função termine sua execução imediatamente e passa o controle de volta para
a linha de onde ela foi chamada. Veja a documentação da função [return](function.return.md)
para maiores informações.

> **Nota**:
>
> Se [return](function.return.md) for omitido então o valor **`null`** será
> retornado.

### Sintaxe do return

**Exemplo #1 O uso de [return](function.return.md)**

```
<?php
function quadrado($num)
{
    return $num * $num;
}
echo quadrado(4); // exibe '16'.
```

Você não pode retornar múltiplos valores a partir de uma função, mas
resultados similares podem ser obtidos retornando um array.

**Exemplo #2 Retornando um array para devolver vários valores**

```
<?php
function primeiros_numeros()
{
    return [0, 1, 2];
}
// Desconstruir o array coleta cada item individualmente
[$zero, $one, $two] = primeiros_numeros();
var_dump($zero, $one, $two);

// Anteriormente ao 7.1.0 a única alternativa era usar list()
list($zero, $one, $two) = primeiros_numeros();
```

Para retornar uma referência de uma função, use o operador de referência &
em ambas a declaração da função e quando definindo o valor para a
variável.

**Exemplo #3 Retornando uma referência de uma função**

```
<?php
function &retorna_referencia()
{
    return $alguma_referencia;
}

$nova_referencia =& retorna_referencia();
```

Para mais detalhes sobre referências, leia a seção [Referências](language.references.md).

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
