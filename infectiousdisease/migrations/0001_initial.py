# Generated by Django 3.2.9 on 2022-01-21 13:34

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Infections',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('district_name', models.CharField(max_length=100)),
                ('male', models.IntegerField()),
                ('female', models.IntegerField()),
                ('cases', models.IntegerField()),
                ('deaths', models.IntegerField()),
                ('recoveries', models.IntegerField()),
                ('date', models.DateField(auto_now=True)),
            ],
        ),
    ]
