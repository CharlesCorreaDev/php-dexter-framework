# Temas Personalizados — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/themes.html

---

# Temas Personalizados[¶](#custom-themes "Link permanente para este título")

O phpMyAdmin vem com suporte para temas de terceiros. Você pode baixar temas adicionais do nosso site em <<https://www.phpmyadmin.net/themes/>>.

## Configuração[¶](#configuration "Link permanente para este título")

Themes are configured with [`$cfg['ThemeManager']`](config.md#cfg_ThemeManager) and
[`$cfg['ThemeDefault']`](config.md#cfg_ThemeDefault). Under `./public/themes/`, you should not
delete the directory `pmahomme` or its underlying structure, because this is
the system theme used by phpMyAdmin. `pmahomme` contains all images and
styles, for backwards compatibility and for all themes that would not include
images or css-files. If [`$cfg['ThemeManager']`](config.md#cfg_ThemeManager) is enabled, you
can select your favorite theme on the main page. Your selected theme will be
stored in a cookie.

## Criação de temas personalizados[¶](#creating-custom-theme "Link permanente para este título")

Para criar um tema:

- make a new subdirectory (for example “your\_theme\_name”) under `./public/themes/`.
- copie os arquivos e diretórios do `pmahomme` para “nome\_do\_seu\_tema”
- edite os arquivos CSS em “nome\_do\_seu\_tema/css”
- coloque suas imagens novas em “nome\_do\_seu\_tema/img”
- edite `_variables.scss` em “nome\_do\_seu\_tema/scss”
- edite `theme.json` em “nome\_do\_seu\_tema” para conter os metadados do tema (veja abaixo)
- crie um novo retrato do seu tema e salve dentro de “nome\_do\_seu\_tema/screen.png”

### Metadados do tema[¶](#theme-metadata "Link permanente para este título")

Alterado na versão 4.8.0: Antes do 4.8.0, os metadados do tema eram passados no arquivo `info.inc.php`. Ele foi substituído por `theme.json` para facilitar a análise sintática (sem a necessidade de lidar com código PHP) e para suportar recursos adicionais.

No diretório do tema, há um arquivo `theme.json` que contém os metadados do tema. Atualmente ele é composto por:

`name`
:   Exibe o nome do tema.

    **Este campo é obrigatório.**

`version`
:   Versão do tema, pode ser um tanto arbitrária e não precisa combinar com a versão do phpMyAdmin.

    **Este campo é obrigatório.**

`description`
:   Descrição do tema. Isso será mostrado no site.

    **Este campo é obrigatório.**

`author`
:   Nome do autor do tema.

    **Este campo é obrigatório.**

`url`
:   Link para o site do autor do tema. É uma boa ideia ter alguma forma de se obter suporte por lá.

`supports`
:   Vetor de versões principais do phpMyAdmin suportadas.

    **Este campo é obrigatório.**

Por exemplo, a definição para o tema Original enviada com o phpMyAdmin 4.8:

```
{
    "name": "Original",
    "version": "4.8",
    "description": "Original phpMyAdmin theme",
    "author": "phpMyAdmin developers",
    "url": "https://www.phpmyadmin.net/",
    "supports": ["4.8"]
}
```

### Compartilhando imagens[¶](#sharing-images "Link permanente para este título")

Se você não quiser usar seus próprios símbolos e botões, remova o diretório “img” em “nome\_do\_seu\_tema”. O phpMyAdmin usará os ícones e botões padrão (do tema de sistema `pmahomme`).
