# Retornando referências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.references.return.php

---

## Retornando referências

Retorno por referência é útil quando é necessário utilizar uma função
para localizar variáveis cuja referência precisa ser obtida.
*Não* deve ser usado retorno por referência para aumentar desempenho, o
mecanismo é esperto o bastante para otimizar isso. Referências somente devem ser retornadas
quando existir uma razão técnica para isso! Para
retornar referências, a sintaxe abaixo deve ser usada:

```
<?php

class Foo
{
    public $value = 42;

    public function &getValue()
    {
        return $this->value;
    }
}

$obj = new Foo();
$myValue = &$obj->getValue(); // $myValue é uma referência a $obj->value, que é 42
$obj->value = 2;
echo $myValue;                // exibe o valor valor de $obj->value, ou seja, 2
```

Neste exemplo, a propriedade do objeto retornado pela
função getValue precisa ser assimilada, não
copiada, como acontecerá se não utilizar a sintaxe de referências.

> **Nota**:
>
> Diferentemente da passagem de parâmetros por referência, aqui é necessário utilizar
> `&` em ambos os lugares - primeiro para indicar o
> retorno por referência (e não a cópia), e depois para indicar a
> ligação da referência (em vez da assimilação convencional) que precisa ser
> explícita para $myValue.

> **Nota**:
>
> Se houver tentativa de retornar uma referência de uma função com a sintaxe
> `return ($this->value);`, isto *não*
> funcionará como esperado para retornar o resultado de uma
> *expressão*, e não uma variável, por referência. Deve-se
> retornar variáveis por referência somente para uma função - nada além disso.

Para utilizar a referência retornada, é necessário utilizar a atribuição por referência:

```
<?php

function &collector()
{
    static $collection = array();
    return $collection;
}

$collection = &collector();
// Agora $collection é uma variável por referência que referencia o array estático dentro da função

$collection[] = 'foo';

print_r(collector());
```

O exemplo acima produzirá:

```
Array
(
    [0] => foo
)
```

> **Nota**:
>
> Se a atribuição for feita sem o símbolo `&` symbol, por exemplo, `$collection = collector();`,
> a variável $collection receberá uma cópia do valor, e não a referência retornada pela função.

Para passar a referência retornada para outra função que espera uma referência,
a seguinte sintaxe pode ser utilizada:

```
<?php

function &collector()
{
    static $collection = array();
    return $collection;
}

array_push(collector(), 'foo');
```

> **Nota**:
>
> Note que `array_push(&collector(), 'foo');`
> *não* funcionará, e retornará um erro fatal.

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
