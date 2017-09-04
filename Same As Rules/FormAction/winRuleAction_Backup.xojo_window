#tag Window
Begin Window winRuleAction_Backup
   BackColor       =   &cFFFFFF00
   Backdrop        =   0
   CloseButton     =   True
   Compatibility   =   ""
   Composite       =   False
   Frame           =   0
   FullScreen      =   False
   FullScreenButton=   False
   HasBackColor    =   False
   Height          =   158
   ImplicitInstance=   True
   LiveResize      =   True
   MacProcID       =   0
   MaxHeight       =   32000
   MaximizeButton  =   True
   MaxWidth        =   32000
   MenuBar         =   0
   MenuBarVisible  =   True
   MinHeight       =   64
   MinimizeButton  =   True
   MinWidth        =   64
   Placement       =   0
   Resizeable      =   True
   Title           =   "Rule"
   Visible         =   True
   Width           =   657
   Begin PushButton PushButton1
      AutoDeactivate  =   True
      Bold            =   False
      ButtonStyle     =   "0"
      Cancel          =   False
      Caption         =   "เพิ่มกฏการเทียบโอน"
      Default         =   True
      Enabled         =   True
      Height          =   20
      HelpTag         =   ""
      Index           =   -2147483648
      InitialParent   =   ""
      Italic          =   False
      Left            =   139
      LockBottom      =   False
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   False
      LockTop         =   True
      Scope           =   0
      TabIndex        =   1
      TabPanelIndex   =   0
      TabStop         =   True
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   118
      Underline       =   False
      Visible         =   True
      Width           =   134
   End
   Begin Label Label2
      AutoDeactivate  =   True
      Bold            =   False
      DataField       =   ""
      DataSource      =   ""
      Enabled         =   True
      Height          =   20
      HelpTag         =   ""
      Index           =   -2147483648
      InitialParent   =   ""
      Italic          =   False
      Left            =   20
      LockBottom      =   False
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   False
      LockTop         =   True
      Multiline       =   False
      Scope           =   0
      Selectable      =   False
      TabIndex        =   6
      TabPanelIndex   =   0
      TabStop         =   True
      Text            =   "หลักสูตร"
      TextAlign       =   0
      TextColor       =   &c00000000
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   21
      Transparent     =   True
      Underline       =   False
      Visible         =   True
      Width           =   100
   End
   Begin PopupMenu popProgram
      AutoDeactivate  =   True
      Bold            =   False
      DataField       =   ""
      DataSource      =   ""
      Enabled         =   True
      Height          =   20
      HelpTag         =   ""
      Index           =   -2147483648
      InitialParent   =   ""
      InitialValue    =   ""
      Italic          =   False
      Left            =   139
      ListIndex       =   0
      LockBottom      =   False
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   False
      LockTop         =   True
      Scope           =   0
      TabIndex        =   7
      TabPanelIndex   =   0
      TabStop         =   True
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   20
      Underline       =   False
      Visible         =   True
      Width           =   258
   End
   Begin Label Label3
      AutoDeactivate  =   True
      Bold            =   False
      DataField       =   ""
      DataSource      =   ""
      Enabled         =   True
      Height          =   20
      HelpTag         =   ""
      Index           =   -2147483648
      InitialParent   =   ""
      Italic          =   False
      Left            =   20
      LockBottom      =   False
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   False
      LockTop         =   True
      Multiline       =   False
      Scope           =   0
      Selectable      =   False
      TabIndex        =   8
      TabPanelIndex   =   0
      TabStop         =   True
      Text            =   "รายวิชาเทียบโอน"
      TextAlign       =   0
      TextColor       =   &c00000000
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   86
      Transparent     =   True
      Underline       =   False
      Visible         =   True
      Width           =   100
   End
   Begin Label Label4
      AutoDeactivate  =   True
      Bold            =   False
      DataField       =   ""
      DataSource      =   ""
      Enabled         =   True
      Height          =   20
      HelpTag         =   ""
      Index           =   -2147483648
      InitialParent   =   ""
      Italic          =   False
      Left            =   20
      LockBottom      =   False
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   False
      LockTop         =   True
      Multiline       =   False
      Scope           =   0
      Selectable      =   False
      TabIndex        =   9
      TabPanelIndex   =   0
      TabStop         =   True
      Text            =   "รายวิชา รจภ"
      TextAlign       =   0
      TextColor       =   &c00000000
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   54
      Transparent     =   True
      Underline       =   False
      Visible         =   True
      Width           =   100
   End
   Begin PopupMenu popCraSubject
      AutoDeactivate  =   True
      Bold            =   False
      DataField       =   ""
      DataSource      =   ""
      Enabled         =   True
      Height          =   20
      HelpTag         =   ""
      Index           =   -2147483648
      InitialParent   =   ""
      InitialValue    =   ""
      Italic          =   False
      Left            =   139
      ListIndex       =   0
      LockBottom      =   False
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   False
      LockTop         =   True
      Scope           =   0
      TabIndex        =   10
      TabPanelIndex   =   0
      TabStop         =   True
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   53
      Underline       =   False
      Visible         =   True
      Width           =   498
   End
   Begin PopupMenu popOtherSubject
      AutoDeactivate  =   True
      Bold            =   False
      DataField       =   ""
      DataSource      =   ""
      Enabled         =   True
      Height          =   20
      HelpTag         =   ""
      Index           =   -2147483648
      InitialParent   =   ""
      InitialValue    =   ""
      Italic          =   False
      Left            =   139
      ListIndex       =   0
      LockBottom      =   False
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   False
      LockTop         =   True
      Scope           =   0
      TabIndex        =   12
      TabPanelIndex   =   0
      TabStop         =   True
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   85
      Underline       =   False
      Visible         =   True
      Width           =   498
   End
   Begin Label Label5
      AutoDeactivate  =   True
      Bold            =   False
      DataField       =   ""
      DataSource      =   ""
      Enabled         =   True
      Height          =   20
      HelpTag         =   ""
      Index           =   -2147483648
      InitialParent   =   ""
      Italic          =   False
      Left            =   409
      LockBottom      =   False
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   False
      LockTop         =   True
      Multiline       =   False
      Scope           =   0
      Selectable      =   False
      TabIndex        =   13
      TabPanelIndex   =   0
      TabStop         =   True
      Text            =   "ปีการศึกษา"
      TextAlign       =   0
      TextColor       =   &c00000000
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   21
      Transparent     =   True
      Underline       =   False
      Visible         =   True
      Width           =   110
   End
   Begin PopupMenu popEduYear
      AutoDeactivate  =   True
      Bold            =   False
      DataField       =   ""
      DataSource      =   ""
      Enabled         =   True
      Height          =   20
      HelpTag         =   ""
      Index           =   -2147483648
      InitialParent   =   ""
      InitialValue    =   ""
      Italic          =   False
      Left            =   531
      ListIndex       =   0
      LockBottom      =   False
      LockedInPosition=   False
      LockLeft        =   True
      LockRight       =   False
      LockTop         =   True
      Scope           =   0
      TabIndex        =   14
      TabPanelIndex   =   0
      TabStop         =   True
      TextFont        =   "System"
      TextSize        =   0.0
      TextUnit        =   0
      Top             =   21
      Underline       =   False
      Visible         =   True
      Width           =   106
   End
End
#tag EndWindow

#tag WindowCode
	#tag Event
		Function KeyDown(Key As String) As Boolean
		  // Press the esc Key to close this window
		  If Key = Chr(27) Then
		    Self.Close
		  End If
		End Function
	#tag EndEvent


	#tag Method, Flags = &h0
		Function AddRule(program as string, eduyear as string, subj_id_th As String, subj_id_en As String, university as String, comp_subj_id_th as string, comp_subj_id_en as string, subj_name As String, credit As String, remark As String) As Boolean
		  If Not IsConnected Then
		    MsgBox("Connect to the database and create the table first.")
		    Return False
		  End If
		  
		  Dim row As New DatabaseRecord
		  
		  // ID will be added automatically
		  row.Column("program") = program
		  row.Column("eduyear") = eduyear
		  row.Column("subj_id_th") = subj_id_th
		  row.Column("subj_id_en") = subj_id_en
		  row.Column("comp_university") = university
		  row.Column("comp_subj_id_th") = comp_subj_id_th
		  row.Column("comp_subj_id_en") = comp_subj_id_en
		  row.Column("subj_name") = subj_name
		  row.Column("credit") = credit
		  row.Column("remark") = remark
		  
		  App.mDB.InsertRecord("sameas_rules", row)
		  
		  If App.mDB.Error Then
		    MsgBox("DB Error: " + App.mDB.ErrorMessage)
		    Return False
		  End If
		  
		  Return True
		End Function
	#tag EndMethod

	#tag Method, Flags = &h0
		Function IsConnected() As Boolean
		  If App.mDB Is Nil Then
		    App.mIsConnected = False
		  End If
		  
		  Return App.mIsConnected
		End Function
	#tag EndMethod


#tag EndWindowCode

#tag Events PushButton1
	#tag Event
		Sub Action()
		  If Not IsConnected Then
		    MsgBox("Connect to the database first.")
		    Return
		  End If
		  
		  // TODO เพิ่มหมายเหตุ
		  If AddRule( popProgram.Text, popEduYear.Text, _
		    popupCode(popCraSubject.Text,1), popupCode(popCraSubject.Text,2), _
		    popupCode(popOtherSubject.Text,4), popupCode(popOtherSubject.Text,1), _
		    popupCode(popOtherSubject.Text,2), popupCode(popCraSubject.Text,3), _
		    popupCode(popCraSubject.Text,4), "" _
		    ) Then
		    winRules.RefreshDataList
		    Self.Close
		  Else
		    MsgBox("Can't add data to the database")
		  End If
		  
		  
		End Sub
	#tag EndEvent
#tag EndEvents
#tag Events popProgram
	#tag Event
		Sub Open()
		  If Not IsConnected Then
		    MsgBox("Connect to the database first.")
		    Return
		  End If
		  
		  Dim sql As String
		  sql = "Select concat( `program`.`prog_name` , ' (' , `program`.`eduyear` , ')') as prog_name from `program` order by `prog_id` asc"
		  
		  Dim data As RecordSet
		  data = App.mDB.SQLSelect(sql)
		  
		  If App.mDB.Error Then
		    MsgBox("DB Error: " + App.mDB.ErrorMessage)
		    Return
		  End If
		  
		  If data <> Nil Then
		    While Not data.EOF
		      popProgram.AddRow( _
		      data.IdxField(1).StringValue.DefineEncoding(Encodings.UTF8))
		      data.MoveNext
		    Wend
		    data.Close
		  End If
		End Sub
	#tag EndEvent
#tag EndEvents
#tag Events popCraSubject
	#tag Event
		Sub Open()
		  If Not IsConnected Then
		    MsgBox("Connect to the database first.")
		    Return
		  End If
		  
		  Dim sql As String
		  sql = "Select concat( `cra_subject`.`subj_id_th` , ' ' , `cra_subject`.`subj_id_en` , ' ' , `cra_subject`.`subj_name` , ' ' , `cra_subject`.`credit`) AS cra_subject FROM `cra_subject` ORDER BY `subj_id` ASC"
		  
		  Dim data As RecordSet
		  data = App.mDB.SQLSelect(sql)
		  
		  If App.mDB.Error Then
		    MsgBox("DB Error: " + App.mDB.ErrorMessage)
		    Return
		  End If
		  
		  If data <> Nil Then
		    While Not data.EOF
		      popCraSubject.AddRow( _
		      data.IdxField(1).StringValue.DefineEncoding(Encodings.UTF8))
		      data.MoveNext
		    Wend
		    data.Close
		  End If
		End Sub
	#tag EndEvent
#tag EndEvents
#tag Events popOtherSubject
	#tag Event
		Sub Open()
		  If Not IsConnected Then
		    MsgBox("Connect to the database first.")
		    Return
		  End If
		  
		  Dim sql As String
		  sql = "Select concat( `other_subject`.`subj_id_th` , ' ' , `other_subject`.`subj_id_en` , ' ' , `other_subject`.`subj_name` , ' ' , `other_subject`.`university` , ' ' , `other_subject`.`credit`) AS other_subject FROM `other_subject` ORDER BY `subj_id` ASC"
		  
		  Dim data As RecordSet
		  data = App.mDB.SQLSelect(sql)
		  
		  If App.mDB.Error Then
		    MsgBox("DB Error: " + App.mDB.ErrorMessage)
		    Return
		  End If
		  
		  If data <> Nil Then
		    While Not data.EOF
		      popOtherSubject.AddRow( _
		      data.IdxField(1).StringValue.DefineEncoding(Encodings.UTF8))
		      data.MoveNext
		    Wend
		    data.Close
		  End If
		End Sub
	#tag EndEvent
#tag EndEvents
#tag Events popEduYear
	#tag Event
		Sub Open()
		  If Not IsConnected Then
		    MsgBox("Connect to the database first.")
		    Return
		  End If
		  
		  Dim sql As String
		  sql = "Select eduyear FROM eduyear order by eduyear_id asc"
		  
		  Dim data As RecordSet
		  data = App.mDB.SQLSelect(sql)
		  
		  If App.mDB.Error Then
		    MsgBox("DB Error: " + App.mDB.ErrorMessage)
		    Return
		  End If
		  
		  If data <> Nil Then
		    While Not data.EOF
		      popEduYear.AddRow( _
		      data.IdxField(1).StringValue.DefineEncoding(Encodings.UTF8))
		      data.MoveNext
		    Wend
		    data.Close
		  End If
		  
		End Sub
	#tag EndEvent
#tag EndEvents
#tag ViewBehavior
	#tag ViewProperty
		Name="BackColor"
		Visible=true
		Group="Background"
		InitialValue="&hFFFFFF"
		Type="Color"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Backdrop"
		Visible=true
		Group="Background"
		Type="Picture"
		EditorType="Picture"
	#tag EndViewProperty
	#tag ViewProperty
		Name="CloseButton"
		Visible=true
		Group="Frame"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Composite"
		Group="OS X (Carbon)"
		InitialValue="False"
		Type="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Frame"
		Visible=true
		Group="Frame"
		InitialValue="0"
		Type="Integer"
		EditorType="Enum"
		#tag EnumValues
			"0 - Document"
			"1 - Movable Modal"
			"2 - Modal Dialog"
			"3 - Floating Window"
			"4 - Plain Box"
			"5 - Shadowed Box"
			"6 - Rounded Window"
			"7 - Global Floating Window"
			"8 - Sheet Window"
			"9 - Metal Window"
			"11 - Modeless Dialog"
		#tag EndEnumValues
	#tag EndViewProperty
	#tag ViewProperty
		Name="FullScreen"
		Group="Behavior"
		InitialValue="False"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="FullScreenButton"
		Visible=true
		Group="Frame"
		InitialValue="False"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="HasBackColor"
		Visible=true
		Group="Background"
		InitialValue="False"
		Type="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Height"
		Visible=true
		Group="Size"
		InitialValue="400"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="ImplicitInstance"
		Visible=true
		Group="Behavior"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Interfaces"
		Visible=true
		Group="ID"
		Type="String"
		EditorType="String"
	#tag EndViewProperty
	#tag ViewProperty
		Name="LiveResize"
		Visible=true
		Group="Behavior"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MacProcID"
		Group="OS X (Carbon)"
		InitialValue="0"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MaxHeight"
		Visible=true
		Group="Size"
		InitialValue="32000"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MaximizeButton"
		Visible=true
		Group="Frame"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MaxWidth"
		Visible=true
		Group="Size"
		InitialValue="32000"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MenuBar"
		Visible=true
		Group="Menus"
		Type="MenuBar"
		EditorType="MenuBar"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MenuBarVisible"
		Visible=true
		Group="Deprecated"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MinHeight"
		Visible=true
		Group="Size"
		InitialValue="64"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MinimizeButton"
		Visible=true
		Group="Frame"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="MinWidth"
		Visible=true
		Group="Size"
		InitialValue="64"
		Type="Integer"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Name"
		Visible=true
		Group="ID"
		Type="String"
		EditorType="String"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Placement"
		Visible=true
		Group="Behavior"
		InitialValue="0"
		Type="Integer"
		EditorType="Enum"
		#tag EnumValues
			"0 - Default"
			"1 - Parent Window"
			"2 - Main Screen"
			"3 - Parent Window Screen"
			"4 - Stagger"
		#tag EndEnumValues
	#tag EndViewProperty
	#tag ViewProperty
		Name="Resizeable"
		Visible=true
		Group="Frame"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Super"
		Visible=true
		Group="ID"
		Type="String"
		EditorType="String"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Title"
		Visible=true
		Group="Frame"
		InitialValue="Untitled"
		Type="String"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Visible"
		Visible=true
		Group="Behavior"
		InitialValue="True"
		Type="Boolean"
		EditorType="Boolean"
	#tag EndViewProperty
	#tag ViewProperty
		Name="Width"
		Visible=true
		Group="Size"
		InitialValue="600"
		Type="Integer"
	#tag EndViewProperty
#tag EndViewBehavior
