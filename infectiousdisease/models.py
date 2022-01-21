from operator import mod
from pyexpat import model
from django.db import models

# Create your models here.


class Infections(models.Model):
    district_name = models.CharField(max_length=100)
    male = models.IntegerField()
    female = models.IntegerField()
    cases = models.IntegerField()
    deaths = models.IntegerField()
    recoveries = models.IntegerField()
    date = models.DateField(auto_now=True)
