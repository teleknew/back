# sl-web-config

Deployment your application using nginx inside of a docker container

https://cli.vuejs.org/ru/guide/deployment.html#docker-nginx

## Project setup
```
npm install
```

### Compiles and hot-reloads for development
```
npm run serve
```

### Compiles and minifies for production
```
npm run build
```

### Lints and fixes files
```
npm run lint
```

### Customize configuration
See [Configuration Reference](https://cli.vuejs.org/config/).

## k8s
1. kubectl apply -f deployment.yaml
2. kubectl port-forward pod/sl-web-6fb879fd78-tjq4q 8080:80

pod/sl-web-6fb879fd78-tjq4q: the exact value could be get from command: kubectl get all
