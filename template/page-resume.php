<?php
/**
 * Template Name: 简历
 */
$templateDirUri = esc_url(get_template_directory_uri());
?>
<!DOCTYPE html>
<html lang="zh-CN" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>李世伟的个人简历</title>
  <link href="<?php echo $templateDirUri; ?>/style.css" rel="stylesheet"/>
  <link rel="icon" href="<?php echo $templateDirUri ?>/images/xbug.ico"/>
  <!--[if lt IE 9]>
  <script src="<?php echo $templateDirUri ?>/static/html5.js"></script>
  <![endif]-->
</head>
<body>
<div class="mdl-layout mdl-js-layout">
  <main class="mdl-layout__content">
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__content">
        非常感谢您百忙之中查看我的个人简历。
        虽以界面的方式向您展示，但我的目标职位是Java。
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">个人信息</div>
      <div class="xbug-resume-item__content">
        <span class="mr_name" id="baseInfo">李世伟</span>
        <span class="base_info">&nbsp;1991.09 男 本科 3年工作经验</span>
        <span class="mr_intro">系统架构师是我的职业目标，我会从基层脚踏实地做起</span>
        <span class="shenfen">毕业院校：大连东软信息学院(专科)，沈阳工程学院(本科)</span>
        <span class="shenfen">当前供职：青岛万有引利网络信息科技有限公司·技术部·Java开发工程师</span>
        <span class="mobile"><i></i>17606396383</span>&nbsp;&nbsp;
        <span class="email"><i></i>lsw1991abc@163.com</span>
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">理想职位</div>
      <div class="xbug-resume-item__content">
        Java开发工程师
        青岛
        8.5k+
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">教育经历</div>
      <div class="xbug-resume-item__content">
        大连东软信息学院
        2010.09~2013.07
        软件技术(Java) 专科
        沈阳工程学院
        2013.09~2015.07
        软件工程(Java) 本科
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">工作经历</div>
      <div class="xbug-resume-item__content">
        2012.09~2013.06，大连倚天软件股份有限公司 · 电子政务事业部，Java Web开发实习生
        2014.10~2015.04，东软集团股份有限公司 · 金融事业部，Java开发实习生
        2015.07~至今，青岛巨商汇网络科技科技有限公司 · 技术部，Java开发工程师
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">参与的项目</div>
      <div class="xbug-resume-item__content">
        四方物流平台（2016/01–至今）
        项目描述：	该项目是所在公司上线项目。在三方物流平台的基础上，整合物流商和配送中心资源，为客户提供仓配一体化信息共享服务平台。让用户高效率、低成本的管理配送服务。
        职责：	参与到系统各个模块的开发、维护和测试。负责整个项目的开发、维护、测试。使用技术Spring Boot、Dubbo、MyBatis、MySQL、Redis、Bootstrap3等

        B2B在线交易平台（2015/07–2015/12）
        项目描述：	该项目是所在公司上线项目。主要解决商家和厂家中间繁琐的流程，让厂家在平台上能够找到优质的经销商，让经销商直接与原厂做生意，拿到一手的产品。帮助客户低成本采购、高质量服务和有利润地将产品销售到用户端。
        职责：	负责项目中物流模块的开发、维护和测试。负责交易平台物流相关模块的开发、维护、测试。使用技术Spring Boot、Dubbo、MyBatis、MySQL、Redis、Bootstrap3等

        医疗审核系统（2014/10–2015/04）
        项目描述：	该项目是在东软集团金融事业部实习期间参与的项目。负责系统的开发和维护。该系统主要是对个人、医生、医疗机构费用及详单的审核。如有过量开药，过敏历史禁忌药，特殊人群等特殊情况进行预警提示。
        职责：	使用了Spring、Struts2框架。数据库使用Oracle 11g。工具：Eclipse、PLSQL。

        行政审批系统（2012/09–2013/05）
        项目描述：	该项目是在倚天软件实习期间，参与开发和维护的系统。该系统主要是是负责审批项目的提交、查询，以及审批文件等的提交。使用了Spring、Struts2、Hibernate框架。数据库是Oracle 11g。DIV+CSS技术是必不可少的。
        职责：	负责项目门户模块功能的开发和维护

        大学生社会服务中心平台（2015/01–2015/06）
        项目描述：	该项目是本科毕业设计。是围绕大学生日常生活上的问题提供的信息服务平台。有公告信息，兼职信息，活动信息，简单的贴吧等。使用了Spring MVC + MyBatis框架，前端使用了JQuery和Bootstrap以及相关插件。数据库采用了MySQL。从需求分析，到最后的测试，都是一个人完成。项目代码已放到GitHub，https://github.com/lsw1991abc/shsj。在开发过程中，有过几次结构改动。
        职责：  afsdfasd

        个人事务管理系统（2013/02–2013/05）
        项目描述：	该项目是专科毕业设计。整合了Spring3，Hibernate4，Struts2框架。数据库使用MySQL5.5。还使用了log4j和junit。因为这个项目从开始到结束是自己完成，多多少少遇到了些问题。不过借助搜索还是把问题解决。项目代码已放到GitHub，https://github.com/lsw1991abc/pams。有段时间未更新了。
        职责：  发大是大非
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">技能属性</div>
      <div class="xbug-resume-item__content">
        Java – 熟练。使用Spring Boot + MyBatis较多，Hibernate偶尔也用到；
        RPC远程服务 – 熟悉。使用Dubbo + Zookeeper较多；
        虚拟化 – 一般。Docker初学者，熟悉常用操作，进一步学习中；
        RDBMS – 熟练。主要使用MySQL，Oracle；
        NoSQL – 一般。使用Redis比较多，MongoDB略有接触；
        PHP – 一般。使用ThinkPHP较多；
        前端 – 熟练。Javascript库使用jQuery较多，Css使用Bootstrap3较多。学习Angular2中；
        运维 – 一般。Linux下常用操作，以及常用程序安装、配置等。通过学习Docker，简化了很多步骤；
        Android，Python – 一般。空闲时间简单学习过；
        机动车驾驶 - 良好。2012.07 取得 C1。
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">战果</div>
      <div class="xbug-resume-item__content">
        2012。05，参加软考取得软件设计师
        2017。07，取得C1驾驶证
        专科获得两次学习优胜奖及优秀团员
        本科获得一次奖学金
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">自我评价</div>
      <div class="xbug-resume-item__content">
        从大学选择软件工程专业，到现在的工作。一直在Java的学习和使用中。大学期间，参加软考，获得了软件设计师资格证书，并且在创业公司和上市集团公司实习过一年半时间。毕业之后，进入海尔的小薇公司，已有一年半多时间。进一步学习了Java相关技术。能够使用Spring Boot、Dubbo、MySQL、MyBatis等开源框架进行开发。我的职业目标是系统架构师，并正在努力着。
      </div>
    </div>
  </main>
</div>
<script src="<?php echo $templateDirUri; ?>/static/jquery/jquery-2.2.0.min.js"></script>
<script src="<?php echo $templateDirUri; ?>/static/material/material.min.js"></script>
</body>
</html>


