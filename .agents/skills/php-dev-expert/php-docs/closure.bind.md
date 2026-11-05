# Duplica uma closure com um objeto vinculado e um escopo de classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/closure.bind.php

---

# Closure::bind

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

Closure::bind — 
Duplica uma closure com um objeto vinculado e um escopo de classe

### Descrição

public static function **Closure::bind**([Closure](class.closure.md) `$closure`, [?](language.types.null.md)[object](language.types.object.md) `$newThis`, [object](language.types.object.md)|[string](language.types.string.md)|[null](language.types.null.md) `$newScope` = "static"): [?](language.types.null.md)[Closure](class.closure.md)

Este método é uma versão estática do [Closure::bindTo()](closure.bindto.md).
Veja a documentação do método para mais informações.

### Parâmetros

`closure`
:   A função anônima a ser vincular.

`newThis`
:   O objeto que a função anônima fornecida deve vincular, ou
    **`null`** para a closure não vincular.

`newScope`
:   O escopo da classe ao qual a closure deve ser informado, ou
    'static' para manter o atual. Se um objeto é fornecido, o tipo do
    objeto será usado. Isso determina a visibilidade dos métodos protegidos e
    privados do objeto vinculado.
    Não é permitido passar uma (objeto da) classe interna como parâmetro this.

### Valor Retornado

Retorna um novo objeto [Closure](class.closure.md) ou **`null`** em caso de falha.

### Examples

**Exemplo #1 Exemplo do método **Closure::bind()****

```
<?php
class A {
    private static $sfoo = 1;
    private $ifoo = 2;
}
$cl1 = static function() {
    return A::$sfoo;
};
$cl2 = function() {
    return $this->ifoo;
};

$bcl1 = Closure::bind($cl1, null, 'A');
$bcl2 = Closure::bind($cl2, new A(), 'A');
echo $bcl1(), "\n";
echo $bcl2(), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
1
2
```

### Veja também

- [Funções anônimas](functions.anonymous.md)
- [Closure::bindTo()](closure.bindto.md) - Duplica a closure com um novo objeto vinculado e escopo de classe.

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
