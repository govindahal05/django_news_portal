from django import forms
from news.models import News, Category


class NewsCreateForm(forms.ModelForm):
    # CATEGORY_CHOICES = [("0", "title 1"), ("1", "title 2"), ("2", "title 3")]
    CATEGORY_CHOICES = [(category.id, category.title) for category in Category.objects.all()]
    category = forms.MultipleChoiceField(
        required=True, widget=forms.CheckboxSelectMultiple, choices=CATEGORY_CHOICES,
    )

    class Meta:
        model = News
        fields = "title", "content", "cover_image", "category"