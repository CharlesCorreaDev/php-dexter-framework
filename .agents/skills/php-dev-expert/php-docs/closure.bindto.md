# Duplica a closure com um novo objeto vinculado e escopo de classe.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/closure.bindto.php

---

# Closure::bindTo

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

Closure::bindTo — 
Duplica a closure com um novo objeto vinculado e escopo de classe.

### Descrição

public function **Closure::bindTo**([?](language.types.null.md)[object](language.types.object.md) `$newThis`, [object](language.types.object.md)|[string](language.types.string.md)|[null](language.types.null.md) `$newScope` = "static"): [?](language.types.null.md)[Closure](class.closure.md)

Cria e retorna uma nova [função
anônima](functions.anonymous.md) com o mesmo corpo e mesmas variáveis ligadas como a original, mas
possivelmente com um diferente objeto ligado e um novo escopo de classe.

O “obeto ligado” determina o valor que `$this` terá
no corpo da função e o “escopo de classe” representa uma classe
que determina quais membros privados e protegidos a função
anônima será capaz de acessar. Nomeadamente, os membros que estarão
visíveis serão os mesmos que estariam, se a função anônima fosse um método da
classe informada como valor do parâmetro
`newScope`.

Closures estáticas não podem ter nenhum objeto ligado (o valor do parâmetro
`newThis` deveria ser **`null`**), mas este método pode
entretanto ser utilizada para alterar seus escopos de classe.

Este método vai assegurar que, para uma closure não estática, possuir uma
instância ligada irá implicar em ter escopo definido e vice-versa. Para este fim,
closures não estáticas que recebem um escopo com instância **`null`** são tornadas
estáticas; e closures não estáticas sem escopo que recebem uma instância
não nula têm o escopo definido para uma classe não especificada.

> **Nota**:
>
> Se for requerido duplicar as funções anônimas, pode ser utilizada
> [clonagem](language.oop5.cloning.md) alternativamente.

### Parâmetros

`newThis`
:   O objeto ao qual a função anônima informada deve ser ligada, ou
    **`null`** para que a closure seja não ligada.

`newScope`
:   O escopo de classe ao qual a closure deve ser associada, ou
    'static' para manter a atual. Se um objeto for informado, o tipo do
    objeto será usado no lugar. Isto determina a visibilidade de métodos
    protegidos e privados do objeto ligado.
    Não é permitido passar (um objeto de) uma classe interna neste parâmetro.

### Valor Retornado

Retorna o novo objeto [Closure](class.closure.md) criado
ou **`null`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Closure::bindTo()****

```
<?php

class A
{
    private $val;

    public function __construct($val)
    {
        $this->val = $val;
    }

    public function getClosure()
    {
        // Retorna a closure ligada a este objeto e escopo
        return function() {
            return $this->val;
        };
    }
}

$ob1 = new A(1);
$ob2 = new A(2);

$cl = $ob1->getClosure();
echo $cl(), "\n";

$cl = $cl->bindTo($ob2);
echo $cl(), "\n";

?>
```

O exemplo acima produzirá
algo semelhante a:

```
1
2
```

### Veja também

- [Funções Anônimas](functions.anonymous.md)
- [Closure::bind()](closure.bind.md) - Duplica uma closure com um objeto vinculado e um escopo de classe

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
