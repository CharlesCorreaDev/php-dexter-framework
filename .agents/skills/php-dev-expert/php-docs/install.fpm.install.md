# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.fpm.install.php

---

## Instalação

### Compilando o código fonte

Para habilitar o FPM na compilação do PHP deve ser adicionada a opção `--enable-fpm`
na linha do comando "configure".

Há várias outras opções de configuração específicas para o FPM (todas opcionais):

- `--with-fpm-user` - configura o usuário FPM (padrão - nobody).
- `--with-fpm-group` - configura o grupo FPM (padrão - nobody).
- `--with-fpm-systemd` - Ativa a integração com o systemd (padrão - no).
- `--with-fpm-acl` - Usa Access Control Lists do POSIX (padrão - no).
- `--with-fpm-apparmor` - Ativa a integração com o AppArmor (padrão - no).
- `--with-fpm-selinux` - Ativa a integração com o SELinux (padrão - no).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | A opção `--with-fpm-selinux` foi adicionada. |
| 8.0.0 | A opção `--with-fpm-apparmor` foi adicionada. |

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
