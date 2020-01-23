<div class="container">
    <div class="row">
        <div class="col-lg-8 single-content">
        
        <p class="mb-5">
            <img src="images/big_img_1.jpg" alt="Image" class="img-fluid">
        </p>  
        <h1 class="mb-4">
            {{ detail_news.title }}
        </h1>
        <div class="post-meta d-flex mb-5">
            <div class="bio-pic mr-3">
            <img src="images/person_1.jpg" alt="Image" class="img-fluidid">
            </div>
            <div class="vcard">
            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> views: {{ detail_news.count }} <span class="icon-star2"></span></span>
            </div>
        </div>

        {{ detail_news.content }}


        <div class="pt-5">
                <p>
                Categories:  
                {% for category in detail_news.category.all  %}
                
                <a href="{% url 'category_news' category_id=category.id %}">{{ category.title }}</a>
                {% endfor %}
                </p>

                <p>
                {% if request.user.is_authenticated and detail_news.author == request.user %}
                <a href="{% url 'update_news' pk=detail_news.id %}"><button type="button" class="btn btn-info">Info</button></a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Delete
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        {{ detail_news.title }}
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="{% url 'delete_news' pk=detail_news.id %}"><button type="button" class="btn btn-primary">Confirm</button></a>
                        </div>
                    </div>
                    </div>
                </div>
                
                {% endif %}
                
                </p>
                </div>
    
    
                <div class="pt-5">
                <div class="section-title">
                    <h2 class="mb-5">6 Comments</h2>
                </div>
                <ul class="comment-list">
                    <li class="comment">
                    <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                    </div>
                    </li>
    
                    <li class="comment">
                    <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                    </div>
    
                    <ul class="children">
                        <li class="comment">
                        <div class="vcard bio">
                            <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                            <h3>Jean Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                        </div>
    
    
                        <ul class="children">
                            <li class="comment">
                            <div class="vcard bio">
                                <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
    
                                <ul class="children">
                                <li class="comment">
                                    <div class="vcard bio">
                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                    </div>
                                </li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                    </ul>
                    </li>
    
                    <li class="comment">
                    <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                    </div>
                    </li>
                </ul>
                <!-- END comment-list -->
                
                <div class="comment-form-wrap pt-5">
                    <div class="section-title">
                    <h2 class="mb-5">Leave a comment</h2>
                    </div>
                    <form action="#" class="p-5 bg-light">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" id="website">
                    </div>
    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Post Comment" class="btn btn-primary py-3">
                    </div>
    
                    </form>
                </div>
                </div>
        </div>


        <div class="col-lg-3 ml-auto">
        <div class="section-title">
            <h2>Popular Posts</h2>
        </div>

        {% for news in popular_news %}
        
            {% if forloop.last %}
                <div class="trend-entry d-flex pl-0">
                    <div class="number align-self-start">{{ forloop.counter }}</div>
                    <div class="trend-contents">
                        <h2><a href="blog-single.html">{{ news.title }}</a></h2>
                        <div class="post-meta">
                        <span class="d-block"><a href="#">{{ news.author }}</a> in <a href="#">News</a></span>
                        <span class="date-read">{{ news.created_at }} <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class="trend-entry d-flex">
                    <div class="number align-self-start">{{ forloop.counter }}</div>
                    <div class="trend-contents">
                        <h2><a href="blog-single.html">{{ news.title  }}</a></h2>
                        <div class="post-meta">
                        <span class="d-block"><a href="#">{{ news.author }}</a> in <a href="#">News</a></span>
                        <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>
            {% endif %}
        {% endfor %}
        

        
        
        <p>
            <a href="#" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
        </p>
        </div>


    </div>
    
</div>