from fabric.api import local

def deploy():
    #local("./project/manage.py check")
    #local("cp -r ./project/. ./wsgi/myproject/")
    local('git checkout production')
    local('git pull origin develop')
    local('git push openshift HEAD:master')
