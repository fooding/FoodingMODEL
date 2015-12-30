# User Information

from datetime import datetime
from hashlib import sha256

from model.base import db
from helper.pbkdf2 import pbkdf2, pbkdf2_check

class User(db.Model):
    __tablename__ = "user"
    uid = db.Column(db.Integer, primary_key=True)
    email = db.Column(db.String(255), unique=True,index=True, nullable=False)
    password = db.Column(db.String(255), nullable=False)
    username = db.Column(db.String(255), nullable=False)
    phonenum = db.Column(db.String(255), nullable=False)
    created_at = db.Column(db.DateTime(), default=datetime.now)

    # relation references

    # one to many
    boxes = db.relationship('box',backref='user',lazy='dynamic')

    def __init__(self, email, password, username, phonenum):
        self.email = email
        self.password = password
        self.username = username
        self.phonenum = phonenum

    def check_pssword(self, password):
        return pbkdf2_check(password,self.password)

    def change_password(self, password):
        self.password = pbkdf2(sha256(password).hexdigest())