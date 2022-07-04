# Card of the Russia Agriculture Ministry
Summary information on the Ministry of Agriculture of the Russian Federation
as a Symfony bundle that provides a REST API URL
with response in json format.

Default URL: `/bundle/mcx/info/index`

All data was obtained from the public Internet resource of the ministry.

[![screenshot from the website Agriculture Ministry](picture.png)](https://mcx.gov.ru)

Some of the response content can be manipulated:
- main data (main): title, address, site, etc
- officials of the ministry (persons)
- contacts

The `app` directory contains ready-to-use files,
which need to be moved to the appropriate directories
your project, which will lead to the completion of the default information.

# Response
The output can be show in two formats:
- in one line
- beautifully formatted
```json
{
    "title": "Министерство сельского хозяйства Российской Федерации",
    "description": "Федеральный орган исполнительной власти...",
    "address": "107996, Москва, Орликов переулок, 1\/11",
    "site": "https:\/\/mcx.gov.ru",
    "contacts": [
        "Тел.: +7 (495) 607-80-00",
        "Факс: +7 (495) 607-83-62",
        "info@mcx.gov.ru"
    ],
    "persons": [
        [
            "Патрушев Дмитрий Николаевич",
            "Министр сельского хозяйства Российской Федерации",
            "info@mcx.gov.ru",
            "Тел.: +7 (495) 607-80-00",
            "Факс: +7 (495) 607-83-62"
        ],
        [
          "..."
        ]
    ]
}
```

# Usage
URL setting
```yaml
# connecting config with route
reiterus_mcx_info:
  resource: '@McxInfoBundle/Resources/config/routes.xml'
  prefix: /bundle/mcx/info
```

Package setup
```yaml
# adding contacts and formatting the output
reiterus_mcx_info:
    contacts:
        - 'Тел.: +7 (495) 607-80-00'
        - 'Факс: +7 (495) 607-83-62'
        - 'info@mcx.gov.ru'
    pretty: true

# addition of personalities through a service with a specific tag
services:
    app.reiterus_mcx_info_persons:
        class: App\Util\McxPersons
        tags:
            - { name: 'tag_mcx_info_persons' }
```

# Installation
You can install the bundle in two ways

From packagist.org
```shell
composer require reiterus/mcx-info-symfony
```

From GitHub repository
```json
{
 "repositories": [
  {
   "type": "vcs",
   "url": "https://github.com/reiterus/mcx-info-symfony.git"
  }
 ]
}
```

# License

This library is released under the [MIT license](LICENSE).