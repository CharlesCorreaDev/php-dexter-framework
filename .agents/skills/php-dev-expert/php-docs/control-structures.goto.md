# goto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.goto.php

---

## goto

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

![Qual é a pior coisa que pode acontecer ao se utilizar o goto?](images/0baa1b9fae6aec55bbb73037f3016001-xkcd-goto.png)

Imagem cortesia do [» xkcd](https://xkcd.com/292)

O operador `goto` pode ser usado para pular para outra
seção do programa. O ponto de destino é definido por um rótulo *sensível a maiúsculas e minúsculas*
seguido de dois pontos, e a instrução é usada como
`goto` seguida do rótulo de destino desejado. O uso do `goto`
não é completamente irrestrito. O rótulo de destino
deve estar no mesmo arquivo e contexto, significando que não se pode pular
para fora ou para dentro de uma função ou método. Também
não pode-se saltar para dentro de um laço ou estrutura switch. Pode-se saltar para fora deles, e um uso comum é usar o
`goto` no lugar de um `break`
multinível.

**Exemplo #1 Exemplo da estrutura de controle `goto`**

```
<?php
goto a;
echo 'Foo';

a:
echo 'Bar';
```

O exemplo acima produzirá:

```
Bar
```

**Exemplo #2 Exemplo da estrutura de controle `goto` em um laço**

```
<?php
for ($i = 0, $j = 50; $i < 100; $i++) {
    while ($j--) {
        if ($j == 17) {
            goto end;
        }
    }
}
echo "i = $i";
end:
echo 'j chegou em 17';
```

O exemplo acima produzirá:

```
j chegou em 17
```

**Exemplo #3 Isto não irá funcionar**

```
<?php
goto loop;
for ($i = 0, $j = 50; $i < 100; $i++) {
    while ($j--) {
        loop:
    }
}
echo "$i = $i";
```

O exemplo acima produzirá
algo semelhante a:

```
Fatal error: 'goto' into loop or switch statement is disallowed in script on line 2
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
