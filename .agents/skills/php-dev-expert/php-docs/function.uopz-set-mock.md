# Usa mock em vez de classe para novos objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-set-mock.php

---

# uopz\_set\_mock

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_set\_mock — Usa mock em vez de classe para novos objetos

### Descrição

function **uopz\_set\_mock**([string](language.types.string.md) `$class`, [mixed](language.types.mixed.md) `$mock`): [void](language.types.void.md)

Se `mock` for uma string contendo o nome de uma classe, ela será instanciada em vez de
`class`. `mock` também pode ser um objeto.

> **Nota**:
>
> Somente o acesso dinâmico a propriedades e métodos utilizará o objeto `mock`.
> O acesso estático ainda utiliza a classe original do parâmetro `class`.
> Veja o [exemplo](function.uopz-set-mock.md#uopz_set_mock.example.static) abaixo.

### Parâmetros

`class`
:   O nome da classe a ter o mock usado.

`mock`
:   O mock a ser usado é uma string contendo o nome da classe a ser usada ou de um objeto.
    Se uma string for passada, ela deve ser o nome completo da classe. É
    recomendado usar a constante mágica `::class` neste caso.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL uopz 6.0.0 | Esta função não suporta mais o mock de membros estáticos. [uopz\_redefine()](function.uopz-redefine.md) e [uopz\_set\_return()](function.uopz-set-return.md), ou [Componere](book.componere.md) podem ser usados ​​em seu lugar. |

### Examples

**Exemplo #1 Exemplo de **uopz\_set\_mock()****

```
<?php
class A {
    public function who() {
        echo "A";
    }
}

class mockA {
    public function who() {
        echo "mockA";
    }
}

uopz_set_mock(A::class, mockA::class);
(new A)->who();
?>
```

O exemplo acima produzirá:

```
mockA
```

**Exemplo #2 Exemplo de **uopz\_set\_mock()****

```
<?php
class A {
    public function who() {
        echo "A";
    }
}

uopz_set_mock(A::class, new class {
                            public function who() {
                                echo "mockA";
                            }
                        });
(new A)->who();
?>
```

O exemplo acima produzirá:

```
mockA
```

**Exemplo #3 **uopz\_set\_mock()** e membros estáticos**

A partir do uopz 6.0.0, o mock de membros estáticos não é mais suportada.

```
<?php
class A {
    const CON = 'A';
    public static function who() {
        echo "A";
    }
}

uopz_set_mock(A::class, new class {
                            const CON = 'mockA';
                            public static function who() {
                                echo "mockA";
                            }
                        });
echo A::CON, PHP_EOL;
A::who();
?>
```

O exemplo acima produzirá:

```
A
A
```

Saída do exemplo acima no uopz 5:

```
mockA
mockA
```

### Veja também

- [uopz\_get\_mock()](function.uopz-get-mock.md) - Obtém o mock atual para uma classe
- [uopz\_unset\_mock()](function.uopz-unset-mock.md) - Remove a definição de um mock previamente definido

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
