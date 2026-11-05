# Compara e troca um item

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.cas.php

---

# Memcached::cas

(PECL memcached >= 0.1.0)

Memcached::cas — Compara e troca um item

### Descrição

public function **Memcached::cas**(  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$cas_token`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$value`,  
    [int](language.types.integer.md) `$expiration` = 0  
): [bool](language.types.boolean.md)

**Memcached::cas()** realiza uma operação de "check and set",
de forma que o item será armazenado apenas se nenhum outro cliente o tiver
atualizado desde a última vez que foi buscado por este cliente. A verificação é
feita por meio do parâmetro
`cas_token`, que é um valor exclusivo de 64 bits atribuído
ao item existente pelo memcache. Consulte a documentação dos métodos
**Memcached::get\*()** para saber como obter esse
token. Observe que o token é representado como um float devido às limitações do espaço inteiro do PHP.

### Parâmetros

`cas_token`
:   Valor exclusivo associado ao item existente. Gerado por memcache.

`key`
:   A chave sob a qual armazenar o valor.

`value`
:   O valor a ser armazenado.

`expiration`
:   O tempo de expiração padrão é 0. Consulte [Tempos de Expiração](memcached.expiration.md) para mais informações.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
O [Memcached::getResultCode()](memcached.getresultcode.md) retornará
**`Memcached::RES_DATA_EXISTS`** se o item que você
está tentando armazenar tiver sido modificado desde a última vez que você o buscou.

### Examples

**Exemplo #1 Exemplo de **Memcached::cas()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

do {
    /* busca lista de IP e seu token */
    $ips = $m->get('ip_block', null, $cas);
    /* se a lista ainda não existir, crie-a e faça
       uma adição atômica que falhará se alguém já tiver adicionado i */
    if ($m->getResultCode() == Memcached::RES_NOTFOUND) {
        $ips = array($_SERVER['REMOTE_ADDR']);
        $m->add('ip_block', $ips);
    /* caso contrário, adicione o IP à lista e armazene via comparação e troca
       com o token, que falhará se outra pessoa atualizar a lista */
    } else {
        $ips[] = $_SERVER['REMOTE_ADDR'];
        $m->cas($cas, 'ip_block', $ips);
    }
} while ($m->getResultCode() != Memcached::RES_SUCCESS);

?>
```

### Veja também

- [Memcached::casByKey()](memcached.casbykey.md) - Compara e troca um item em um servidor específico

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
