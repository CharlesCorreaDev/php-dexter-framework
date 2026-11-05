# Uso básico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ftp.examples-basic.php

---

## Uso básico

**Exemplo #1 Exemplo da extensão FTP**

```
<?php
// configura uma conexão básica
$ftp = ftp_connect($ftp_server);

// faz login com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// verifica conexão
if ((!$ftp) || (!$login_result)) {
    echo "Conexão FTP falhou!";
    echo "Tentativa de conexão a $ftp_server para o usuário $ftp_user_name";
    exit;
} else {
    echo "Conectado a $ftp_server, para o usuário $ftp_user_name";
}

// envia o arquivo
$upload = ftp_put($ftp, $destination_file, $source_file, FTP_BINARY);

// verifica estado do envio
if (!$upload) {
    echo "Envio por FTP falhou!";
} else {
    echo "Enviado $source_file a $ftp_server como $destination_file";
}

// fecha a conexão FTP
ftp_close($ftp);
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
