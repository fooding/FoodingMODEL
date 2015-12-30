# Abstract Diary
from model.base import db

class Box(db.Model):
    __tablename__ = "box"
    uid = db.Column(db.Integer, primary_key=True)
    calo_sum = db.Column(db.Float)
    fat_sum = db.Column(db.Float)
    prot_sum = db.Column(db.Float)
    duration = db.Column(db.Integer) # 1 is one day
    User_uid = db.Column(db.Integer, db.ForeignKey('user.uid'))
    user = db.relationship('user')

    def __init__(self,calo_sum,fat_sum,prot_sum,duration,user):
        self.calo_sum = calo_sum
        self.fat_sum = fat_sum
        self.prot_sum = prot_sum
        self.duration = duration
        self.user = user