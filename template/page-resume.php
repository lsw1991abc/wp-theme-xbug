<?php
/**
 * Template Name: 简历
 */
$templateDirUri = esc_url( get_template_directory_uri() );
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>xxx</title>
  <link href="<?php echo $templateDirUri; ?>/style.css" rel="stylesheet" />
  <link rel="icon" href="<?php echo $templateDirUri ?>/images/xbug.ico" />
  <!--[if lt IE 9]>
  <script src="<?php echo $templateDirUri ?>/static/html5.js"></script>
  <![endif]-->
</head>
<body class="xbug-resume">
<main class="mdl-layout__content">
  <div class="xbug-resume-item">
    <div class="xbug-resume-item__wrap">
      <div class="xbug-resume-item__content resume-welcome">
        <p>非常感谢您百忙之中查看我的个人简历</p>
        <p>虽以界面的方式向您展示<br />但我的目标职位是Java开发工程师</p>
      </div>
    </div>
  </div>
  <div class="xbug-resume-item">
    <div class="xbug-resume-item__wrap">
      <div class="xbug-resume-item__title">个人信息</div>
      <div class="xbug-resume-item__content" style="display: flex;">
        <div style="margin: 30px;">
          <img src="/images/photo.png" style="height: 200px; width: 135px;">
        </div>
        <div>
          <p>姓名：李世伟</p>
          <p>男 1991.09 本科 3年工作经验</p>
          <p class="resume-grid-param"><span>毕业院校：</span><span>大连东软信息学院(专科)<br />沈阳工程学院(本科)</span></p>
          <p class="resume-grid-param"><span>当前供职：</span><span>青岛万有引利网络信息科技有限公司<br />技术部 · Java开发工程师</span></p>
          <p class="resume-grid-param"><span>联系电话：</span><span>17606396383</span></p>
          <p class="resume-grid-param"><span>电子邮箱：</span><span><a href="mailto:lsw1991abc@163.com">lsw1991abc@163.com</a></span></p>
        </div>
      </div>
    </div>
  </div>
  <div class="xbug-resume-item">
    <div class="xbug-resume-item__wrap">
      <div class="xbug-resume-item__title">理想职位</div>
      <div class="xbug-resume-item__content">
        <p>希望工作地点在青岛，能接受短期出差</p>
        <p>从事Java开发相关的工作，薪资8.5k以上</p>
        <p>系统架构师是我的职业目标，我会从基层脚踏实地做起</p>
      </div>
    </div>
  </div>
  <div class="xbug-resume-item">
    <div class="xbug-resume-item__wrap">
      <div class="xbug-resume-item__title">教育经历</div>
      <div class="xbug-resume-item__content">
        <ul>
          <li class="resume-grid-li">
            <span class="resume-icon"><img src="/images/eduneusoft.jpg" title="大连东软信息学院" alt="大连东软信息学院" /></span>
            <p class="resume-grid-param">
              <span>2010.09~2013.07</span>
              <span>大连东软信息学院</span>
              <span>软件技术(Java) 专科</span>
            </p>
          </li>
          <li class="resume-grid-li">
            <span class="resume-icon"><img src="/images/edusie.jpg" title="大连东软信息学院" alt="大连东软信息学院" /></span>
            <div>
              <span>2013.09~2015.07</span>
              <span>沈阳工程学院</span>
              <span>软件工程(Java) 本科</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="xbug-resume-item">
    <div class="xbug-resume-item__wrap">
      <div class="xbug-resume-item__title">工作经历</div>
      <div class="xbug-resume-item__content">
        <ul>
          <li>
            <span class="resume-icon">logo</span>
            <time>2015.07~至今</time>
            <span>青岛巨商汇网络科技科技有限公司 · 技术部</span>
            <span>Java开发工程师</span>
          </li>
          <li>
            <span class="resume-icon">logo</span>
            <time>2014.10~2015.04</time>
            <span>东软集团股份有限公司 · 金融事业部</span>
            <span>Java开发实习生</span>
          </li>
          <li>
            <span class="resume-icon">logo</span>
            <time>2012.09~2013.06</time>
            <span>大连倚天软件股份有限公司 · 电子政务事业部</span>
            <span>Java Web开发实习生</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="xbug-resume-item">
    <div class="xbug-resume-item__wrap">
      <div class="xbug-resume-item__title">参与的项目</div>
      <div class="xbug-resume-item__content">
        <div>
          <h3>四方物流平台
            <small>（2016/01–至今）</small>
          </h3>
          <div>
            <span>项目描述：</span>
            <p>该项目是所在公司上线项目。在三方物流平台的基础上，整合物流商和配送中心资源，为客户提供仓配一体化信息共享服务平台。让用户高效率、低成本的管理配送服务。</p>
          </div>
          <div>
            <span>职责： </span>
            <p>参与到系统各个模块的开发、维护和测试。负责整个项目的开发、维护、测试。使用技术Spring Boot、Dubbo、MyBatis、MySQL、Redis、Bootstrap3等</p>
          </div>
        </div>
        <div>
          <h3>B2B在线交易平台
            <small>（2015/07–2015/12）</small>
          </h3>
          <div>
            <span>项目描述：</span>
            <p>该项目是所在公司上线项目。主要解决商家和厂家中间繁琐的流程，让厂家在平台上能够找到优质的经销商，让经销商直接与原厂做生意，拿到一手的产品。帮助客户低成本采购、高质量服务和有利润地将产品销售到用户端。</p>
          </div>
          <div>
            <span>职责： </span>
            <p>负责项目中物流模块的开发、维护和测试。负责交易平台物流相关模块的开发、维护、测试。使用技术Spring Boot、Dubbo、MyBatis、MySQL、Redis、Bootstrap3等</p>
          </div>
        </div>
        <div>
          <h3>医疗审核系统
            <small>（2014/10–2015/04）</small>
          </h3>
          <div>
            <span>项目描述：</span>
            <p>该项目是在东软集团金融事业部实习期间参与的项目。负责系统的开发和维护。该系统主要是对个人、医生、医疗机构费用及详单的审核。如有过量开药，过敏历史禁忌药，特殊人群等特殊情况进行预警提示。</p>
          </div>
          <div>
            <span>职责： </span>
            <p>使用了Spring、Struts2框架。数据库使用Oracle 11g。工具：Eclipse、PLSQL。</p>
          </div>
        </div>
        <div>
          <h3>行政审批系统
            <small>（2012/09–2013/05）</small>
          </h3>
          <div>
            <span>项目描述：</span>
            <p>该项目是在倚天软件实习期间，参与开发和维护的系统。该系统主要是是负责审批项目的提交、查询，以及审批文件等的提交。使用了Spring、Struts2、Hibernate框架。数据库是Oracle 11g。DIV+CSS技术是必不可少的。</p>
          </div>
          <div>
            <span>职责： </span>
            <p>负责项目门户模块功能的开发和维护</p>
          </div>
        </div>
        <div>
          <h3>大学生社会服务中心平台
            <small>（2015/01–2015/06）</small>
          </h3>
          <div>
            <span>项目描述：</span>
            <p>该项目是本科毕业设计。是围绕大学生日常生活上的问题提供的信息服务平台。有公告信息，兼职信息，活动信息，简单的贴吧等。使用了Spring MVC + MyBatis框架，前端使用了JQuery和Bootstrap以及相关插件。数据库采用了MySQL。从需求分析，到最后的测试，都是一个人完成。项目代码已放到GitHub，https://github.com/lsw1991abc/shsj。在开发过程中，有过几次结构改动。</p>
          </div>
          <div>
            <span>职责： </span>
            <p>afsdfasd</p>
          </div>
        </div>
        <div>
          <h3>个人事务管理系统
            <small>（2013/02–2013/05）</small>
          </h3>
          <div>
            <span>项目描述：</span>
            <p>该项目是专科毕业设计。整合了Spring3，Hibernate4，Struts2框架。数据库使用MySQL5.5。还使用了log4j和junit。因为这个项目从开始到结束是自己完成，多多少少遇到了些问题。不过借助搜索还是把问题解决。项目代码已放到GitHub，https://github.com/lsw1991abc/pams。有段时间未更新了。</p>
          </div>
          <div>
            <span>职责： </span>
            <p>发大是大非</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="xbug-resume-item">
    <div class="xbug-resume-item__wrap">
      <div class="xbug-resume-item__title">技能属性</div>
      <div class="xbug-resume-item__content">
        <ul>
          <li><span>Java</span><span>熟练。使用Spring Boot + MyBatis较多，Hibernate偶尔也用到；</span></li>
          <li><span>RPC远程服务</span><span>熟悉。使用Dubbo + Zookeeper较多；</span></li>
          <li><span>虚拟化</span><span>一般。Docker初学者，熟悉常用操作，进一步学习中；</span></li>
          <li><span>RDBMS</span><span>熟练。主要使用MySQL，Oracle；</span></li>
          <li><span>NoSQL</span><span>一般。使用Redis比较多，MongoDB略有接触；</span></li>
          <li><span>PHP</span><span>一般。使用ThinkPHP较多；</span></li>
          <li><span>前端</span><span>熟练。Javascript库使用jQuery较多，Css使用Bootstrap3较多。学习Angular2中；</span>
          </li>
          <li><span>运维</span><span>一般。Linux下常用操作，以及常用程序安装、配置等。通过学习Docker，简化了很多步骤；</span></li>
          <li><span>Android，Python</span><span>一般。空闲时间简单学习过；</span></li>
          <li><span>机动车驾驶</span><span>良好。2012.07 取得 C1；</span></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="xbug-resume-item">
    <div class="xbug-resume-item__wrap">
      <div class="xbug-resume-item__title">战果</div>
      <div class="xbug-resume-item__content">
        <ul>
          <li>2012。05，参加软考取得软件设计师</li>
          <li>2017。07，取得C1驾驶证</li>
          <li>专科获得两次学习优胜奖及优秀团员</li>
          <li>本科获得一次奖学金</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="xbug-resume-item">
    <div class="xbug-resume-item__wrap">
      <div class="xbug-resume-item__title">自我评价</div>
      <div class="xbug-resume-item__content">
        <p>从大学选择软件工程专业，到现在的工作。一直在Java的学习和使用中。大学期间，参加软考，获得了软件设计师资格证书，并且在创业公司和上市集团公司实习过一年半时间。毕业之后，进入海尔的小薇公司，已有一年半多时间。进一步学习了Java相关技术。能够使用Spring Boot、Dubbo、MySQL、MyBatis等开源框架进行开发。我的职业目标是系统架构师，并正在努力着。</p>
      </div>
    </div>
  </div>
</main>
<script src="<?php echo $templateDirUri; ?>/static/jquery/jquery-2.2.0.min.js"></script>
<script src="<?php echo $templateDirUri; ?>/static/material/material.min.js"></script>
</body>
</html>


