from fabric.api import local

def deploy():
    #local("./project/manage.py check")
    #local("cp -r ./project/. ./wsgi/myproject/")
    local("git pull origin develop")
    local("git add .");
    local("git commit -m 'build'")
    local("git push openshift HEAD:master")

