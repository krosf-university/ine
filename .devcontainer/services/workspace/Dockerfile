FROM php:7.4-cli-alpine
# Install the php zip extension.
RUN apk add --no-cache libzip-dev && docker-php-ext-configure zip && docker-php-ext-install zip
# Install php pcov pecl extension for super-fast coverage reports.
RUN apk add --no-cache g++ gcc make php7-dev zlib-dev && pecl install pcov && docker-php-ext-enable pcov
# Install common php extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql
# Install composer nodejs and some tools
RUN apk add --no-cache composer nodejs npm yarn zsh curl git openssh gnupg
# Create a vscode user group and user account.
RUN addgroup -g 1333 -S vscode && adduser -u 1333 -S vscode -G vscode && chown -R vscode:vscode /home/vscode/
# Install zimfw and starship
RUN curl -fsSL https://raw.githubusercontent.com/zimfw/install/master/install.zsh | ZIM_HOME=/home/vscode/.zim HOME=/home/vscode zsh \
    && curl -fsSL https://starship.rs/install.sh | sh -s -- -y \
    && echo -e "eval \"\$(starship init zsh)\"" >> /home/vscode/.zshrc \
    && chown -R vscode:vscode /home/vscode/.z*
# Install sudo exec
RUN apk add --no-cache sudo && echo '%wheel ALL=(ALL) NOPASSWD:ALL' > /etc/sudoers.d/wheel && adduser vscode wheel
# Setup PHP for development
RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
RUN sed -i 's/128M/2G/g' /usr/local/etc/php/php.ini
# Setup Locale
ENV MUSL_LOCALE_DEPS cmake make musl-dev gcc gettext-dev libintl
ENV MUSL_LOCPATH /usr/share/i18n/locales/musl

RUN apk add --no-cache \
    $MUSL_LOCALE_DEPS \
    && wget https://gitlab.com/rilian-la-te/musl-locales/-/archive/master/musl-locales-master.zip \
    && unzip musl-locales-master.zip \
    && cd musl-locales-master \
    && cmake -DLOCALE_PROFILE=OFF -D CMAKE_INSTALL_PREFIX:PATH=/usr . && make && make install \
    && cd .. && rm -r musl-locales-master

RUN mkdir -p /home/vscode/.vscode-server/extensions /home/vscode/.composer \
    && chown -R vscode /home/vscode/.vscode-server /home/vscode/.composer
# Run the workspace till we die.
CMD ["sleep", "infinity"]
