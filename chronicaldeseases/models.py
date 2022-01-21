from django.db import models

# Create your models here.


class Chronical_deseases(models.Model):
    district_name = models.CharField(max_length=100)
    male = models.IntegerField()
    female = models.IntegerField()
    cases = models.IntegerField()
    deaths = models.IntegerField()
    recoveries = models.IntegerField()
    date = models.DateField(auto_now=True)

    def __str__(self) -> str:
        return self.district_name
