# Badges

This repository houses info for logos, buttons and shields for various minecraft-related websites to enhance your README.md pages!

Please self-host the custom assets this repo provides.

# Logos, Buttons and Shields

## Modrinth
~~Assets ranging from logos to buttons can be found at [https://github.com/modrinth/art](https://web.archive.org/web/20220712131732/https://github.com/modrinth/art)~~. Sadly this repository has been deleted.

### Button

A button can be found in [🏅 Devin's Badges repo](https://intergrav.github.io/devins-badges-docs/badges/cozy/#modrinth).

### Shield

Modrinth shields are available on https://shields.io/.

Example Modrinth downloads shield:

<img src="https://img.shields.io/modrinth/dt/better-flame-particles?colorA=181712&colorB=fff5c6&label=Modrinth&style=for-the-badge&logo=modrinth">

Code:

```markdown
<img src="https://img.shields.io/modrinth/dt/better-flame-particles?colorA=181712&colorB=fff5c6&label=Modrinth&style=for-the-badge&logo=modrinth">
```

## CurseForge

No official asset repository.

### Logo

Logo is unusable for inbeds.

[Custom made logo](assets/curseforge-orange.svg):

<img width="40px" alt="Visit on CurseForge" src="assets/curseforge-orange.svg">

Code:

```markdown
<img width="40px" alt="Visit on CurseForge" src="https://raw.githubusercontent.com/Tschipcraft/badges/main/assets/curseforge-orange.svg">
```

### Button

[Custom made button that fits the Modrinth style](assets/curseforge-badge-dark.svg):

<a href="https://www.curseforge.com/minecraft/texture-packs/better-flame-particles">
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="assets/curseforge-badge-dark.svg">
  <source media="(prefers-color-scheme: light)" srcset="assets/curseforge-badge-light.svg">
  <img alt="Download on CurseForge" src="assets/curseforge-badge-dark.svg">
</picture>
</a>

Code:
```markdown
<a href="https://www.curseforge.com/minecraft/texture-packs/better-flame-particles">
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/Tschipcraft/badges/main/assets/curseforge-badge-dark.svg">
  <source media="(prefers-color-scheme: light)" srcset="https://raw.githubusercontent.com/Tschipcraft/badges/main/assets/curseforge-badge-light.svg">
  <img alt="Download on CurseForge" src="https://raw.githubusercontent.com/Tschipcraft/badges/main/assets/curseforge-badge-dark.svg">
</picture>
</a>
```

A alternative button can also be found in [🏅 Devin's Badges repo](https://intergrav.github.io/devins-badges-docs/badges/cozy/#curseforge).

### Shield

https://shields.io/ now officially supports CurseForge! 🎉

Example CurseForge downloads shield:

<img src="https://img.shields.io/curseforge/dt/782814?label=CurseForge&colorA=191700&colorB=e3e1ce&style=for-the-badge&logo=curseforge">

Code:

```markdown
<img src="https://img.shields.io/curseforge/dt/782814?label=CurseForge&colorA=191700&colorB=e3e1ce&style=for-the-badge&logo=curseforge">
```

Alternate shield service for Curse Forge: https://cf.way2muchnoise.eu/

Example shield:

<img src="https://cf.way2muchnoise.eu/full_782814_downloads.svg?badge_style=for_the_badge">

Code:
```markdown
<img src="https://cf.way2muchnoise.eu/full_782814_downloads.svg?badge_style=for_the_badge">
```

## Planet Minecraft

### Logo

https://www.planetminecraft.com/images/layout/favicon-128.png

<img width="40px" alt="Visit on PlanetMinecraft" src="https://www.planetminecraft.com/images/layout/favicon-128.png">

Code:
```markdown
<img width="40px" alt="Visit on PlanetMinecraft" src="https://www.planetminecraft.com/images/layout/favicon-128.png">
```

### Button

No button available.

### Shield

No shield service exists that I know of. ~~Made a [custom PHP file](/endpoint.php) to create an endpoint that can be used in shields.io (This file needs to be hosted on your own webserver with PHP installed).~~ The code for this shield does not work anymore.

Code:
```markdown
<img src="https://img.shields.io/endpoint?logo=data%3Aimage%2Fwebp%3Bbase64%2CUklGRmYBAABXRUJQVlA4TFoBAAAvP8APEJ%2FAJgCANDjcRHDt34QCWoH5aqgJAKQBbtzb%2Fk3sYgGvraJIkpq5E3C60M%2BfbwYBmfkPAPj%2F78kRNnPJKxVqPkwCMQgq%2FI1Morbke9f%2Fcc5p9Qji1EawYTDAtm2rakNT77bBxv%2F%2FWo6Hg5q2j2tH9H8CUvArNJ36d9a5F2d2dt53ki%2BUOVUHLOZ6PGmVNA3mKClDf9iVdzcdvi%2FFAHe2mh%2FOKOA0envTquspCFwvcwECTMv7VW5ST2f%2BF6y1Uzm4R0lWLv%2B5hsrR6erLWxqkSw3m9aqvMlYPkp6msemeJF1PukoGrvIwX8BsZtMzmE8gm1u5Q8en6cnADJyFgxS0OhvwKBL4gJlTpVsAfMxA3XdMchqbmc2lPoO8b%2BrncmpS7u4%2BdPfKvBOukW6Fqk1Ss1R9shQp%2F37YHe8gdwgxHOw1Kfg8qWEEBKQz1u1GOvENBJ%2BJGIIB&style=for-the-badge&url=<URL to PHP file>?project=texture-pack/better-flame-particles">
```

`project=` defines the url slug for the project e.g. for planetminecraft.com/texture-pack/better-flame-particles/, it's texture-pack/better-flame-particles.  
Make sure to actually encode the URL to the hosted PHP file. For better configuration, use [the already available documentation on shields.io for endpoints](https://shields.io/endpoint).

# Supported Versions Display

[This PHP file](/supported/supported.php) creates a image that displays the supported Minecraft versions for your project.
Make sure to include all assets in the subdirectory if you want to host and use it. [Font Source](https://fonts2u.com/minecraft-regular.font).

`total_versions=` defines a range of versions that should be displayed. Any version not specified here will not be shown.<br>
`supported_versions=` defines a range of supported versions. If the progress bar is enabled, it will be filled. If icons are enabled, a green checkmark will appear.<br>
`not_updated_versions=` defines a range of versions that will no longer receive updates. If the progress bar is enabled, it will be partially filled in. If icons are enabled, a desaturated checkmark will appear. There is no special case when desaturated icons are on.<br>
`untested_versions=` defines a range of versions that have not yet been tested. A question mark will appear.<br>
`icons=` defines whether icons are shown. (true/false)<br>
`desaturated_icons=` defines whether icons should use their desaturated version. (true/false)<br>
`progress_bar=` defines whether a Minecraft-styled progress bar is shown. (true/false)<br>
`mc_background=` defines whether a Minecraft button texture  will be used as the background. (true/false)<br>
`platform=` defines the platform on which this image will be displayed. If the progress_bar is disabled, the background color will be the exact color value of the specified platform. (modrinth/curseforge/none)

There is also an alternative/more modern cross texture in the subdirectory. If you want to use it, exchange it with cross.png.

Examples:
<img alt="Supported versions" src="https://tschipcraft.ddns.net/mod_resources/supported/supported.php?not_updated_versions=1.15,1.16&untested_versions=1.20&supported_versions=1.17,1.18,1.19&total_versions=1.13,1.14,1.15,1.16,1.17,1.18,1.19,1.20&icons=true&white_mode=false&platform=modrinth">

<img alt="Supported versions" src="https://tschipcraft.ddns.net/mod_resources/supported/supported.php?not_updated_versions=1.15,1.16&untested_versions=1.20&supported_versions=1.17,1.18,1.19&total_versions=1.13,1.14,1.15,1.16,1.17,1.18,1.19,1.20&mc_background=true&progress_bar=true">

Code:
```markdown
<img alt="Supported versions" src="<URL to file>/supported.php?not_updated_versions=1.15,1.16&untested_versions=1.20&supported_versions=1.17,1.18,1.19&total_versions=1.13,1.14,1.15,1.16,1.17,1.18,1.19,1.20&icons=true&white_mode=false&platform=modrinth">
```

```markdown
<img alt="Supported versions" src="<URL to file>/supported.php?not_updated_versions=1.15,1.16&untested_versions=1.20&supported_versions=1.17,1.18,1.19&total_versions=1.13,1.14,1.15,1.16,1.17,1.18,1.19,1.20&mc_background=true&progress_bar=true">
```
