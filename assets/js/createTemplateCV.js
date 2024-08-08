// change language
document.querySelectorAll('.setting-cv__language-btn .btn').forEach( btn =>{
    btn.addEventListener('click',function(){
      document.querySelectorAll('.setting-cv__language-btn .btn').forEach( btn =>{
        btn.classList.remove('btn-active');
      })
      this.classList.add('btn-active'); 
    })
  })
  // Change color
  document.addEventListener('DOMContentLoaded', function(){
    const titlesCVElements = document.querySelectorAll('.titles-cv');
    const images = document.querySelectorAll('.personal-infor__icon img[data-img-src]');
    const defaultSuffix = '_orange.png';
    const defaultRadio = document.querySelector('.setting-cv__color-radio--orange span');
    if(defaultRadio){
      defaultRadio.classList.add('radio-active');
      const defaultBackgroundColor = window.getComputedStyle(defaultRadio).backgroundColor;
      titlesCVElements.forEach(titleCVElement =>{
        titleCVElement.style.backgroundColor = defaultBackgroundColor;
      })
      images.forEach(image =>{
        image.src = image.getAttribute('data-img-src') + defaultSuffix;
      })
    }
    document.querySelectorAll('.setting-cv__color-radio span').forEach( radio =>{
      radio.addEventListener('click',function(){
        document.querySelectorAll('.setting-cv__color-radio span').forEach( radio =>{
          radio.classList.remove('radio-active');
        })

        this.classList.add('radio-active'); 
        const computedStyle = window.getComputedStyle(this);
        const backgroundColor = computedStyle.backgroundColor;
        titlesCVElements.forEach(titleCVElement =>{
          titleCVElement.style.backgroundColor = backgroundColor;
        })

        const imgSuffix = this.getAttribute('data-suffix');
        images.forEach(image =>{
          image.src = image.getAttribute('data-img-src') + imgSuffix;
        })
      })
    })
  })
  
  // select menu
  const select = document.querySelector('.select');
  const optionList = document.querySelector('.option-list');
  const options = document.querySelectorAll('.option'); 
  select.addEventListener('click',function(){
    //hide and show
    optionList.classList.toggle('active');
    select.querySelector('.fa-chevron-down').classList.toggle('fa-chevron-up'); //error here
    //select option
    options.forEach(option =>{
      option.addEventListener('click',function(){
        options.forEach(option =>{
          option.classList.remove('selected');
        }) 
        select.querySelector('span').innerHTML = option.innerHTML;
        option.classList.add('selected');
        optionList.classList.toggle('active');
        select.querySelector('.fa-chevron-down').classList.toggle('fa-chevron-up'); //error here
        optionList.classList.remove('active');
        
      })
    })
    document.body.addEventListener('click',function(e){
      if(e.target !== select && !select.contains(e.target)){
        optionList.classList.remove('active');
    }});
  })

  // Slider Jobs
  //const pageNumbers = document.querySelector(".pageNumbers");
  const paginationJobsList = document.querySelector(".jobs__list");
  const listJobs = paginationJobsList.querySelectorAll(".job-box");
  const prevButtonJob = document.querySelector(".slider-job--prev");
  const nextButtonJob = document.querySelector(".slider-job--next");

  const jobLimit = 4;
  const pageCountJob = Math.ceil(listJobs.length / jobLimit);
  let currentPageJobs = 1;

  // const displayPageNumbers = (index) =>{
  //     const pageNumber = document.createElement("a");
  //     pageNumber.innerText = index;
  //     pageNumber.setAttribute('href', "#");
  //     pageNumber.setAttribute("data-index", index);
  //     pageNumbers.appendChild(pageNumber);
  // };

  // const getPageNumbers = ()=>{
  //     for(let i=1; i <= pageCount; i++){
  //         displayPageNumbers(i);
  //     };
  // };
  const disableButtonJob = (button) =>{
      button.classList.add("disabled");
      button.setAttribute("disabled", true);
  };

  const enableButtonJob = (button) =>{
      button.classList.remove("disabled");
      button.removeAttribute("disabled");
  };

  const controlButtonsStatus = () =>{
      if(currentPageJobs === 1){
          disableButtonJob(prevButtonJob);
      }
      else{
          enableButtonJob(prevButtonJob);
      }
      if(pageCountJob === currentPageJobs){
          disableButtonJob(nextButtonJob);
      }
      else{
          enableButtonJob(nextButtonJob);
      }
  };

  // const handleActivePageNumber = () =>{
  //     document.querySelectorAll('.pageNumbers a').forEach((button) =>{
  //         button.classList.remove("active");
  //         const pageIndex = Number(button.getAttribute("data-index"));
  //         if(pageIndex === currentPage){
  //             button.classList.add('active');
  //         }
  //     });
  // };

  const setCurrentPage = (pageNum) =>{
      currentPageJobs = pageNum;

      //handleActivePageNumber();
      controlButtonsStatus();

      const prevRange = (pageNum - 1) * jobLimit;
      const currRange = pageNum * jobLimit;

      listJobs.forEach((item, index) =>{
          item.classList.add('hidden');
          if(index >= prevRange && index < currRange){
              item.classList.remove('hidden');
          }
      });
  };

  window.addEventListener('load', ()=>{
      //getPageNumbers();
      setCurrentPage(1);

      prevButtonJob.addEventListener('click', ()=>{
          setCurrentPage(currentPageJobs - 1);
      });

      nextButtonJob.addEventListener("click", ()=>{
          setCurrentPage(currentPageJobs + 1);
      });

      // document.querySelectorAll('.pageNumbers a').forEach((button) =>{
      //     const pageIndex = Number(button.getAttribute('data-index'));

      //     if (pageIndex) {
      //     button.addEventListener('click', (event) => {
      //       event.preventDefault();
      //       setCurrentPage(pageIndex);
      //     });
      //   };
      // });
  });


// Slider Template cv
const paginationTemplateList = document.querySelector('.template-cv__list')
const listTemplate = document.querySelectorAll('.template-cv__box')
const prevButtonTemplate = document.querySelector('.slider-template--prev')
const nextButtonTemplate = document.querySelector('.slider-template--next')
const templateLimit = 6;
const templateCount = Math.ceil(listTemplate.length / templateLimit);
let currentPageTemplate = 1;

const disableButtonTemplate = (button) =>{
  button.classList.add("disabled");
  button.setAttribute("disabled", true);
};

const enableButtonTemplate = (button) =>{
  button.classList.remove("disabled");
  button.removeAttribute("disabled");
};

const controlButtonsStatusTemplate = () =>{
  if(currentPageTemplate === 1){
    disableButtonTemplate(prevButtonTemplate);
  }else {
    enableButtonTemplate(prevButtonTemplate);
  };
  if(templateCount === currentPageTemplate){
    disableButtonTemplate(nextButtonTemplate);
  }else {
    enableButtonTemplate(nextButtonTemplate);
  }
}

const setCurrentPageTemplate = (pageNum) =>{
  currentPageTemplate = pageNum;
  controlButtonsStatusTemplate();

  const prevRange = (pageNum - 1) * templateLimit;
  const currRange = pageNum * templateLimit; 

  listTemplate.forEach((item,index) =>{
    item.classList.add('hidden');
    if(index >= prevRange && index < currRange){
      item.classList.remove('hidden');
    }
  })
} 

window.addEventListener('load', () =>{
  setCurrentPageTemplate(1);
  prevButtonTemplate.addEventListener('click', () =>{
    setCurrentPageTemplate(currentPageTemplate - 1);
  })
  nextButtonTemplate.addEventListener('click', () =>{
    setCurrentPageTemplate(currentPageTemplate + 1);
  })
})

// Slider Blog 
const paginationBlogList = document.querySelector('.blog__list');
const listBlog = document.querySelectorAll('.blog__box');
const prevButtonBlog = document.querySelector('.slider-blog--prev');
const nextButtonBlog = document.querySelector('.slider-blog--next');

const blogLimit = 4;
const blogCount = Math.ceil(listBlog.length / blogLimit);
let currentPageBlog = 1;

const disableButtonBlog = (button) =>{
  button.classList.add("disabled");
  button.setAttribute("disabled", true);
}

const enableButtonBlog = (button) =>{
  button.classList.remove("disabled");
  button.removeAttribute("disabled");
}

const controlButtonStatusBlog = () =>{
  if(currentPageBlog === 1){
    disableButtonBlog(prevButtonBlog);
  }else{
    enableButtonBlog(prevButtonBlog);
  };
  if(currentPageBlog === blogCount){
    disableButtonBlog(nextButtonBlog);
  }else{
    enableButtonBlog(nextButtonBlog);
  }
}

const setCurrentPageBlog = (pageNum) =>{
  currentPageBlog = pageNum;

  controlButtonStatusBlog();

  const prevRange = (pageNum - 1) * blogLimit;
  const currRange = pageNum * blogLimit;

  listBlog.forEach((item,index) =>{
    item.classList.add('hidden');
    if(index >= prevRange && index < currRange){
      item.classList.remove('hidden');
    }
  })
}

window.addEventListener('load', () =>{
 setCurrentPageBlog(1);

 prevButtonBlog.addEventListener('click', ()=>{
  setCurrentPageBlog(currentPageBlog - 1);
 });

 nextButtonBlog.addEventListener('click', ()=>{
  setCurrentPageBlog(currentPageBlog + 1);
 })

})


