from fabric.api import local

def deploy():
    #local("./project/manage.py check")
    #local("cp -r ./project/. ./wsgi/myproject/")
    #local("git add -p && git commit")
    local("git push openshift HEAD:master")

