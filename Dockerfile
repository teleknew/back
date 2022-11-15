FROM tparfenov/sl-back-base 
WORKDIR /var/www/html
COPY ./ /var/www/html

#https://www.google.com/search?q=%D0%B2+entrypoint+%D0%BF%D1%80%D0%BE%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C+environment&newwindow=1&sxsrf=ALiCzsbJH3TOPYvlF92RSglpC_dfLpu7Yw%3A1668504172251&ei=bFpzY8T1DqmQxc8P7ciHqAQ&oq=%D0%B2+ENTRYPOINT+%D0%BF%D1%80%D0%BE%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C+env&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQARgAMgUIIRCgATIFCCEQoAE6CwguEIAEEMcBENEDOgUIABCABDoFCC4QgAQ6BQgAEKIESgQITRgBSgQIQRgASgQIRhgAUABY5D9gmVZoA3ABeAKAAfYBiAHfHpIBBjAuMTIuOJgBAKABAaABAsABAQ&sclient=gws-wiz-serp
#https://habr.com/ru/company/ruvds/blog/439980/
#https://tproger.ru/translations/docker-instuction/
#https://stackoverflow.com/questions/54308754/entrypoint-with-environment-variables-and-overridable-cmd
#https://ealebed.github.io/posts/2018/docker-%D1%81%D0%BE%D0%B2%D0%B5%D1%82-21-%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-%D0%BF%D0%B5%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%BD%D1%8B%D1%85-%D0%BE%D0%BA%D1%80%D1%83%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F/
#https://ru.stackoverflow.com/questions/947899/%D0%9A%D0%B0%D0%BA-%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D1%8C-env-%D1%84%D0%B0%D0%B9%D0%BB%D1%8B-%D0%B2-docker-yml
#https://docs.docker.com/compose/environment-variables/