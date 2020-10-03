FROM nginx:1.17-alpine
RUN addgroup -g 1333 vscode && addgroup nginx vscode
RUN adduser -u 1333 -S vscode -G vscode
COPY default.conf /etc/nginx/conf.d/default.conf