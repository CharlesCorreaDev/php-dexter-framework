# Uso básico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/shmop.examples-basic.php

---

## Uso básico

**Exemplo #1 Visão Geral de Operações de Memória Compartilhada**

```
<?php

// Cria um bloco de memória compartilhada de 100 bytes com ID de sistema 0xff3
$shm_id = shmop_open(0xff3, "c", 0644, 100);
if (!$shm_id) {
    echo "Não foi possível criar o segmento de memória compartilhada\n";
}

// Obtendo o tamanho do bloco da memória compartilhada
$shm_size = shmop_size($shm_id);
echo "Tamanho do Bloco da Memória compartilhada: " . $shm_size . " foram criados.\n";

// Escrevendo uma string de teste na memória compartilhada
$shm_bytes_written = shmop_write($shm_id, "meu bloco de memória compartilhada", 0);
if ($shm_bytes_written != strlen("meu bloco de memória compartilhada")) {
    echo "Não foi possível escrever todo o comprimento dos dados\n";
}

// Lendo a string de volta
$my_string = shmop_read($shm_id, 0, $shm_size);
if (!$my_string) {
    echo "Não foi possível ler a partir do bloco de memória compartilhada\n";
}
echo "Os dados dentro da memória compartilhada eram: " . $my_string . "\n";

// Excluindo o bloco e fechando o segmento de memória compartilhada
if (!shmop_delete($shm_id)) {
    echo "Couldn't mark shared memory block for deletion.";
}
shmop_close($shm_id);

?>
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
