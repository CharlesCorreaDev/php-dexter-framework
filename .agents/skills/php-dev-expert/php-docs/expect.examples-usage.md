# Exemplos de uso de Expect

> **Fonte / Source:** https://www.php.net/manual/pt_BR/expect.examples-usage.php

---

## Exemplos de uso de Expect

**Exemplo #1 Exemplo de uso de Expect**

Este exemplo conecta-se ao servidor via SSH e mostra o tempo de atividade
remoto.

```
<?php
ini_set("expect.loguser", "Off");

$stream = fopen("expect://ssh root@remotehost uptime", "r");

$cases = array (
    array (0 => "password:", 1 => PASSWORD)
);

switch (expect_expectl ($stream, $cases)) {
    case PASSWORD:
        fwrite ($stream, "password\n");
        break;

    default:
        die ("Ocorreu um erro ao conectar-se ao host remoto!\n");
}

while ($line = fgets($stream)) {
      print $line;
}
fclose ($stream);
?>
```

O exemplo a seguir se conecta ao host remoto, determina se o sistema operacional
instalado é de 32 ou 64 bits e, em seguida, executa a atualização para um pacote específico.

**Exemplo #2 Outro Exemplo de Uso de Expect**

```
<?php
ini_set("expect.timeout", -1);
ini_set("expect.loguser", "Off");

$stream = expect_popen("ssh root@remotehost");

while (true) {
    switch (expect_expectl ($stream, array (
            array ("password:", PASSWORD), // SSH está pedindo uma senha
            array ("yes/no)?", YESNO), // SSH está perguntando se deve armazenar a entrada do host
            array ("~$ ", SHELL, EXP_EXACT), // Conseguimos o shell!
    ))) {
        case PASSWORD:
            fwrite ($stream, "secret\n");
            break;

        case YESNO:
            fwrite ($stream, "yes\n");
            break;

        case SHELL:
            fwrite ($stream, "uname -a\n");
            while (true) {
                    switch (expect_expectl ($stream, array (
                            array ("~$ ", SHELL, EXP_EXACT), // Conseguimos o shell!
                            array ("^Linux.*$", UNAME, EXP_REGEXP), // uname -a output
                    ), $match)) {
                        case UNAME:
                            $uname .= $match[0];
                            break;

                        case SHELL:
                            // Executa a atualização:
                            if (strstr ($uname, "x86_64")) {
                                    fwrite ($stream, "rpm -Uhv http://mirrorsite/somepath/some_64bit.rpm\n");
                            } else {
                                    fwrite ($stream, "rpm -Uhv http://mirrorsite/somepath/some_32bit.rpm\n");
                            }
                            fwrite ($stream, "exit\n");
                            break 2;

                        case EXP_TIMEOUT:
                        case EXP_EOF:
                            break 2;

                        default:
                            die ("Ocorreu um erro!\n");
                    }
            }
            break 2;

        case EXP_TIMEOUT:
        case EXP_EOF:
            break 2;

        default:
            die ("Ocorreu um erro!\n");
    }
}

fclose ($stream);
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
