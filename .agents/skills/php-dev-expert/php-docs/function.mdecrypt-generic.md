# Descriptografa dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mdecrypt-generic.php

---

# mdecrypt\_generic

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mdecrypt\_generic — Descriptografa dados

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mdecrypt\_generic**([resource](language.types.resource.md) `$td`, [string](language.types.string.md) `$data`): [string](language.types.string.md)

Esta função descriptografa dados. Note que o comprimento da string retornada
pode de fato ser maior que a string não criptografada, devido ao preenchimento
dos dados.

### Parâmetros

`td`
:   Um descritor de criptografia retornado por
    [mcrypt\_module\_open()](function.mcrypt-module-open.md).

`data`
:   Dados criptografados.

### Valor Retornado

Retorna a string descriptografada.

### Examples

**Exemplo #1 Exemplo de **mdecrypt\_generic()****

```
<?php
    /* Dados */
    $key = 'this is a very long key, even too long for the cipher';
    $plain_text = 'very important data';

    /* Abre o módulo e cria o IV */
    $td = mcrypt_module_open('des', '', 'ecb', '');
    $key = substr($key, 0, mcrypt_enc_get_key_size($td));
    $iv_size = mcrypt_enc_get_iv_size($td);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);

    /* Inicializa o identificador de criptografia */
    if (mcrypt_generic_init($td, $key, $iv) != -1) {

        /* Criptografa os dados */
        $c_t = mcrypt_generic($td, $plain_text);
        mcrypt_generic_deinit($td);

        /* Reinicializa buffers para descriptografia */
        mcrypt_generic_init($td, $key, $iv);
        $p_t = mdecrypt_generic($td, $c_t);

        /* Limpa tudo */
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
    }

    if (strncmp($p_t, $plain_text, strlen($plain_text)) == 0) {
        echo "ok\n";
    } else {
        echo "erro\n";
    }
?>
```

O exemplo acima mostra como verificar se os dados antes da criptografia são
os mesmos que os dados após a descriptografia. É muito importante
reinicializar o buffer de criptografia com
[mcrypt\_generic\_init()](function.mcrypt-generic-init.md) antes de tentar descriptografar os
dados.

O identificador de descriptografia deve sempre ser inicializado com
[mcrypt\_generic\_init()](function.mcrypt-generic-init.md) com uma chave e um IV antes
de chamar esta função. Quando a criptografia tiver terminado, deve-se liberar os
buffers de criptografia chamando [mcrypt\_generic\_deinit()](function.mcrypt-generic-deinit.md).
Veja [mcrypt\_module\_open()](function.mcrypt-module-open.md) para um exemplo.

### Veja também

- [mcrypt\_generic()](function.mcrypt-generic.md) - Esta função criptografa dados
- [mcrypt\_generic\_init()](function.mcrypt-generic-init.md) - Esta função inicializa todos os buffers necessários para criptografia
- [mcrypt\_generic\_deinit()](function.mcrypt-generic-deinit.md) - Esta função desinicializa um módulo de criptografia

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
